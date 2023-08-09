<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('config.php');
require('includes/connection.php');

if (isset($_POST['stripeToken'])) {
    \Stripe\Stripe::setVerifySslCerts(false);

    $token = $_POST['stripeToken'];
    $price = $_POST['amount'];
    $amount = $_POST['amount'];
    $user_id = $_POST['user_id'];
    $menu_id = $_POST['menu_id'];
    $c_id = $_POST['c_id'];
    $product_id = $_POST['product_id'];
    
    if ($amount < 200) {
        $amount = 200;
    }

    $amount = $amount * 100;

    try {
        $data = \Stripe\Charge::create(array(
            "amount" => $amount,
            "currency" => "pkr",
            "description" => "Paying for Offer",
            "source" => $token,
        ));

        if ($data) {
            $con->beginTransaction();

            // Generate a unique invoice ID
            $invoice_id = uniqid();

            // Prepare the SQL insert query for the orders table
            $insertOrderQuery = "INSERT INTO `orders`(`manufacturer_id`, `customer_id`, `invoice_id`, `amount`,`status`, `product_id`) 
                                VALUES (:menu_id, :user_id, :invoice_id, :price, 'Paid', :product_id)";
            $insertOrderStmt = $con->prepare($insertOrderQuery);
            $insertOrderStmt->bindParam(':menu_id', $menu_id, PDO::PARAM_INT);
            $insertOrderStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $insertOrderStmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_STR); // Bind the generated invoice ID
            $insertOrderStmt->bindParam(':price', $price, PDO::PARAM_STR);
            $insertOrderStmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
            $insertOrderStmt->execute();

            // Prepare the SQL update query to update chat table status
            $updateChatStatusQuery = "UPDATE `chat` SET `status` = 1 WHERE `id` = :chat_id";
            $updateChatStatusStmt = $con->prepare($updateChatStatusQuery);
            $updateChatStatusStmt->bindParam(':chat_id', $c_id, PDO::PARAM_INT);
            $updateChatStatusStmt->execute();

            // Prepare the SQL update query to update user's wallet
            $updateQuery = "UPDATE `panel_users` SET `wallet` = `wallet` + :price WHERE `id` = :menu_id";
            $updateStmt = $con->prepare($updateQuery);
            $updateStmt->bindParam(':price', $price, PDO::PARAM_STR);
            $updateStmt->bindParam(':menu_id', $menu_id, PDO::PARAM_INT);
            $updateStmt->execute();

            // Insert transaction data into the transactions table
            $t_id = $data['id'];
            $t_amount = $data['amount'];
            $t_created = $data['created'];
            $t_currency = $data['currency'];
            $t_description = $data['description'];
            $date = date('Y-m-d');
            $insertTransactionQuery = "INSERT INTO `transactions`(`tid`, `amount`, `created_at`, `currency`, `description`, `user_id`, `menu_id`, `date`)
                                        VALUES (:t_id, :t_amount, :t_created, :t_currency, :t_description, :user_id, :menu_id, :date)";
            $insertTransactionStmt = $con->prepare($insertTransactionQuery);
            $insertTransactionStmt->bindParam(':t_id', $t_id, PDO::PARAM_STR);
            $insertTransactionStmt->bindParam(':t_amount', $t_amount, PDO::PARAM_STR);
            $insertTransactionStmt->bindParam(':t_created', $t_created, PDO::PARAM_INT);
            $insertTransactionStmt->bindParam(':t_currency', $t_currency, PDO::PARAM_STR);
            $insertTransactionStmt->bindParam(':t_description', $t_description, PDO::PARAM_STR);
            $insertTransactionStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $insertTransactionStmt->bindParam(':menu_id', $menu_id, PDO::PARAM_INT);
            $insertTransactionStmt->bindParam(':date', $date, PDO::PARAM_STR);
            $insertTransactionStmt->execute();

            $con->commit();

            header("location:orders_list2.php?msg=Order created Successfully");
            exit();
        }
    } catch (\Stripe\Exception\ApiErrorException $e) {
        echo "Error: " . $e->getMessage();
    } catch (PDOException $e) {
        // Handle any database-related errors
        $con->rollBack();
        echo "Database Error: " . $e->getMessage();
    }
}
?>
