<?php include ('connection.php');
require __DIR__ . 'vendor/../vendor/autoload.php';
// First, run 'composer require pusher/pusher-php-server'
// Start the session
session_start();

// Handle logout
if (isset($_GET['logout'])) {
    // Destroy the session
    session_destroy();

    // Clear the session cookie by setting it to expire in the past
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }

    // Redirect to the login page
    header('Location: ../../login.php');
    exit;
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check the user ID and user type in the session
echo "User ID: " . $_SESSION['login_user_id'];
echo "User Type: " . $_SESSION['user_type'];

?>
<?php
function get($table, $condition = null, $col = '*')
{
    global $con;

    $query_text = "SELECT $col FROM $table WHERE 1=1 $condition";
  

    try {
        $stmt = $con->prepare($query_text);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    } catch (PDOException $e) {
        echo "Error executing query: " . $e->getMessage();
        return false;
    }
}




// Check if the form is submitted
if (isset($_POST['product_add'])) {
    // Your database connection setup code here (assuming $con is the database connection)

    $manufacturer_id = $_SESSION['login_user_id'];
    $name = $_POST['name'];
    $code = $_POST['code'];
    $description = $_POST['description'];
    $purchase_price = $_POST['purchase_price'];
    $sale_price = $_POST['sale_price'];
    $quantity = $_POST['quantity'];

    // Validate purchase_price input before inserting
    if (preg_match('/^\d+(\.\d{1,2})?$/', $purchase_price)) {
        // Check if an image was uploaded
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image_info = $_FILES['image'];
            $image_name = $image_info['name'];
            $image_tmp_name = $image_info['tmp_name'];
            $image_size = $image_info['size'];
            $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

            // Check if the file extension is valid
            $allowed_extensions = array('jpg', 'jpeg', 'png');
            if (in_array($image_extension, $allowed_extensions)) {
                // Move the uploaded image to the 'products' directory
                $image_destination = 'products/' . uniqid('product_') . '.' . $image_extension;
                if (move_uploaded_file($image_tmp_name, $image_destination)) {
                    // Prepare the SQL statement
                    $query = "INSERT INTO `products`(`manufacturer_id`, `name`, `code`, `description`, `purchase_price`, `sale_price`, `quantity`, `image`) 
                              VALUES (:manufacturer_id, :name, :code, :description, :purchase_price, :sale_price, :quantity, :image)";

                    // Prepare the statement
                    $stmt = $con->prepare($query);

                    // Bind parameters
                    $stmt->bindParam(':manufacturer_id', $manufacturer_id);
                    $stmt->bindParam(':name', $name);
                    $stmt->bindParam(':code', $code);
                    $stmt->bindParam(':description', $description);
                    $stmt->bindParam(':purchase_price', $purchase_price);
                    $stmt->bindParam(':sale_price', $sale_price);
                    $stmt->bindParam(':quantity', $quantity);
                    $stmt->bindParam(':image', $image_destination);

                    // Execute the statement
                    if ($stmt->execute()) {
                        header("location:../products_list.php?msg=Data Saved Successfully");
                        exit();
                    } else {
                        echo "Failed to insert data into the database.";
                    }
                } else {
                    echo "Failed to move the uploaded image.";
                }
            } else {
                echo "Invalid image file. Only JPG, JPEG, and PNG formats are allowed.";
            }
        } else {
            echo "Please upload an image.";
        }
    } else {
        echo "Invalid purchase price format. Please provide a valid number with up to 2 decimal places.";
    }
}

if (isset($_POST['send_message'])) {
    $options = array(
        'cluster' => 'ap2',
        'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
        '205e1b728241d54a3443',
        '247b0bc270cea4a2982e',
        '1641095',
        $options
    );

    $sender = $_POST['sender'];
    $receiver = $_POST['reciever'];
    $room = $_POST['room'];
    $message = $_POST['message'];

    // Call getChatRoomData after initializing $sender and $receiver
    getChatRoomData($sender, $receiver);

    $data['sender'] =  $sender;
    $data['reciever'] =  $receiver;
    $data['message'] = $message;

    $pusher->trigger('fyp', 'my-event', $data);

    try {
        // Provide a default product_id value (e.g., 0) if no product is associated with the message
        $product_id = 0;

        $stmt = $con->prepare("INSERT INTO `chat`(`sender_id`, `reciever_id`, `message_text`, `attachment`, `is_offer`, `price`, `product_id`, `room_id`)
            VALUES (:sender, :receiver, :message, '', 0, 0, :product_id, :room)");

        $stmt->bindParam(':sender', $sender);
        $stmt->bindParam(':receiver', $receiver);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':room', $room);
        $stmt->bindParam(':product_id', $product_id);

        $stmt->execute();
        $messageId = $con->lastInsertId();

        // Rest of your PHP code ...
    } catch (PDOException $e) {
        // Handle any database errors here
        $response = array();
        $response['success'] = false;
        $response['error'] = $e->getMessage();

        // Add a log statement for the database error
        file_put_contents('log.txt', 'Database error: ' . $e->getMessage() . PHP_EOL, FILE_APPEND);

        echo json_encode($response);
    }
}


if (isset($_POST['send_offer'])) {
  $sender = $_POST['sender'];
  $recievre = $_POST['reciever'];
  $room = $_POST['room'];
  $message = $_POST['message'];
  $product = $_POST['product'];
  $amount = $_POST['amount'];

  $options = array(
      'cluster' => 'ap2',
      'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
      '205e1b728241d54a3443',
      '247b0bc270cea4a2982e',
      '1641095',
      $options
  );

  $query = "INSERT INTO `chat`(`sender_id`, `reciever_id`, `message_text`, `attachment`, `is_offer`, `price`, `product_id`, `room_id`)
            VALUES (:sender, :receiver, :message, '', 1, :amount, :product, :room)";

  $stmt = $con->prepare($query);
  $stmt->bindParam(':sender', $sender, PDO::PARAM_INT);
  $stmt->bindParam(':receiver', $recievre, PDO::PARAM_INT);
  $stmt->bindParam(':message', $message, PDO::PARAM_STR);
  $stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
  $stmt->bindParam(':product', $product, PDO::PARAM_INT);
  $stmt->bindParam(':room', $room, PDO::PARAM_INT);

  if ($stmt->execute()) {
      $name = '';
      $cond = "AND id = :product_id";
      $stmt = $con->prepare("SELECT name FROM products WHERE id = :product_id");
      $stmt->bindParam(':product_id', $product, PDO::PARAM_INT);
      $stmt->execute();
      $data = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($data) {
          $name = $data['name'];
      }

      $data = array(
          'sender' => $sender,
          'receiver' => $recievre,
          'message' => $message,
          'is_offer' => 1,
          'product_id' => $product,
          'product_name' => $name,
          'chat_id' => $con->lastInsertId(),
          'amount' => $amount
      );

      $pusher->trigger('fyp', 'my-event', $data);
  } else {
      return false;
  }
}
// functions.php
function getChatRoomData($user1, $user2) {
    global $con;
    $query = "SELECT *, IF(`u1` = :user1, `u2`, `u1`) AS other_user FROM `chat_room` WHERE (`u1` = :user1 AND `u2` = :user2) OR (`u1` = :user2 AND `u2` = :user1)";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':user1', $user1);
    $stmt->bindParam(':user2', $user2);
    $stmt->execute();
    $chatRoomData = $stmt->fetch(PDO::FETCH_ASSOC);
  
    if ($chatRoomData) {
      // Get the latest timestamp for the chat room from the chat table
      $roomId = $chatRoomData['id'];
      $query = "SELECT MAX(`timestamp`) AS last_message_timestamp FROM `chat` WHERE `room_id` = :roomId";
      $stmt = $con->prepare($query);
      $stmt->bindParam(':roomId', $roomId);
      $stmt->execute();
      $lastMessageTimestamp = $stmt->fetch(PDO::FETCH_ASSOC)['last_message_timestamp'];
  
      // If there are no messages, set the last_message_timestamp to the chat room's creation date
      if (!$lastMessageTimestamp) {
        $lastMessageTimestamp = $chatRoomData['date'];
      }
  
      // Update the last_message_timestamp in the chat_room table
      $updateQuery = "UPDATE `chat_room` SET `last_message_timestamp` = :lastMessageTimestamp WHERE `id` = :roomId";
      $updateStmt = $con->prepare($updateQuery);
      $updateStmt->bindParam(':lastMessageTimestamp', $lastMessageTimestamp);
      $updateStmt->bindParam(':roomId', $roomId);
      $updateStmt->execute();
  
      $chatRoomData['last_message_timestamp'] = $lastMessageTimestamp;
    }
  
    return $chatRoomData;
  }
  
  

if (isset($_POST['product_update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $code = $_POST['code'];
  $description = $_POST['description'];
  $purchase_price = $_POST['purchase_price'];
  $sale_price = $_POST['sale_price'];
  $quantity = $_POST['quantity'];

  $query = "UPDATE `products` SET `name`=:name, `code`=:code, `description`=:description, 
            `purchase_price`=:purchase_price, `sale_price`=:sale_price, `quantity`=:quantity 
            WHERE id=:id";

  $stmt = $con->prepare($query);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->bindParam(':code', $code, PDO::PARAM_STR);
  $stmt->bindParam(':description', $description, PDO::PARAM_STR);
  $stmt->bindParam(':purchase_price', $purchase_price, PDO::PARAM_STR);
  $stmt->bindParam(':sale_price', $sale_price, PDO::PARAM_STR);
  $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);

  if ($stmt->execute()) {
      $previousPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'products_list.php';
      header("Location: " . $previousPage . "?msg=Data%20Saved%20Successfully");
      exit();
  } else {
      echo "failed";
  }
}

//create manufacturer profile
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['profile_create'])) {
    

    // Database connection (Replace these values with your actual database credentials)
    $servername = "172.18.0.2";
    $username = "root";
    $password = "786110";
    $dbname = "clothdatabase";

    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process the form data and file upload
    if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image']['name'])) {
        // Get the uploaded file details
        $image = $_FILES['profile_image'];
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];

        // Define the target directory to store the uploaded images
        $target_dir = "profiles/";

        // Get the file extension
        $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

        // Define the acceptable file extensions (png, jpg, jpeg)
        $allowed_extensions = array('png', 'jpg', 'jpeg');

        // Check if the file extension is in the allowed list
        if (in_array($image_extension, $allowed_extensions)) {
            // Generate a unique filename to avoid overwriting existing files
            $new_filename = uniqid('profile_', true) . '.' . $image_extension;

            // Set the target file path
            $target_file = $target_dir . $new_filename;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($image_tmp_name, $target_file)) {
                // File upload was successful
                echo "File uploaded successfully.";
               
                // You can now save the $target_file path to the database or perform any other necessary actions.
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file format. Only PNG, JPG, and JPEG files are allowed.";
        }
    } else {
        echo "No file was uploaded.";
    }

    // Insert the new manufacturer's profile into the database
    $query = "INSERT INTO panel_users (name, phone, email, description, fb, twitter, insta, linkdin, supply, from_country, languages, address, profile_image_path, user_type)
              VALUES (:name, :phone, :email, :description, :fb, :twitter, :insta, :linkdin, :supply, :from_country, :languages, :address, :profile_image, :user_type)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':phone', $_POST['phone']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':fb', $_POST['fb']);
    $stmt->bindParam(':twitter', $_POST['twitter']);
    $stmt->bindParam(':insta', $_POST['insta']);
    $stmt->bindParam(':linkdin', $_POST['linkdin']);
    $stmt->bindParam(':supply', $_POST['supply']);
    $stmt->bindParam(':from_country', $_POST['from_country']);
    $stmt->bindParam(':languages', $_POST['languages']);
    $stmt->bindParam(':address', $_POST['address']);
    $stmt->bindParam(':profile_image', $new_filename); // Use $new_filename to store the filename in the database
    $stmt->bindValue(':user_type', 'Manufacturer'); // Set the user_type to "Manufacturer"

    if ($stmt->execute()) {
        $previousPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'profile_view1.php';
        header("Location: " . $previousPage . "?profile=Data%20Saved%20Successfully");
        exit();
    } else {
        echo "Failed to insert data into the database.";
    }
}
//end of create manufacturer profile
// Assuming you have already established the database connection in $pdo
$pdo = new PDO('mysql:host=172.18.0.2;dbname=clothdatabase', 'root', '786110');

function updateProfile($id, $name, $phone, $email, $description, $fb, $twitter, $insta, $linkdin, $supply, $from_country, $languages, $address, $pdo) {
    // Update the profile details in the database
    $query = "UPDATE `panel_users` SET 
                `name`=:name,
                `phone`=:phone,
                `email`=:email,
                `description`=:description,
                `fb`=:fb,
                `twitter`=:twitter,
                `insta`=:insta,
                `linkdin`=:linkdin,
                `supply`=:supply,
                `from_country`=:from_country,
                `languages`=:languages,
                `address`=:address,
                `profile_image_path`=:profile_image_path
              WHERE id=:id";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':fb', $fb, PDO::PARAM_STR);
    $stmt->bindParam(':twitter', $twitter, PDO::PARAM_STR);
    $stmt->bindParam(':insta', $insta, PDO::PARAM_STR);
    $stmt->bindParam(':linkdin', $linkdin, PDO::PARAM_STR);
    $stmt->bindParam(':supply', $supply, PDO::PARAM_STR);
    $stmt->bindParam(':from_country', $from_country, PDO::PARAM_STR);
    $stmt->bindParam(':languages', $languages, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':profile_image_path', $new_filename, PDO::PARAM_STR); // Add this line to bind the profile image path

    // Process the uploaded profile image, if provided
    if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image']['name'])) {
        // Define the target directory to store the uploaded images
        $target_dir = "profiles/";

        // Get the uploaded file details
        $image = $_FILES['profile_image'];
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];

        // Get the file extension
        $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

        // Define the acceptable file extensions (png, jpg, jpeg)
        $allowed_extensions = array('png', 'jpg', 'jpeg');

        // Check if the file extension is in the allowed list
        if (in_array($image_extension, $allowed_extensions)) {
            // Generate a unique filename to avoid overwriting existing files
            $new_filename = uniqid('profile_', true) . '.' . $image_extension;

            // Set the target file path
            $target_file = $target_dir . $new_filename;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($image_tmp_name, $target_file)) {
                // File upload was successful
                // Update the profile image path in the prepared statement
                // It will be executed when we call $stmt->execute() later
            } else {
                echo "Error uploading profile image.";
                return; // Stop the function execution if the image upload fails
            }
        } else {
            echo "Invalid profile image format. Only PNG, JPG, and JPEG files are allowed.";
            return; // Stop the function execution if the image format is invalid
        }
    } else {
        // If no new image is uploaded, retain the existing profile image path in the database
        $new_filename = $p['profile_image_path'];
    }

    // Execute the prepared statement
    if ($stmt->execute()) {
        $previousPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'profile_update1.php';
        header("Location: " . $previousPage . "?profile=Data%20Saved%20Successfully");
        exit();
    } else {
        echo "Failed to insert data into the database.";
    }
}


// Check if the form is submitted and process the update
if (isset($_POST['profile_update'])) {
    // Check if the 'id' field is present and not empty
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        echo "Error: Invalid or missing 'id' field.";
        exit(); // Stop execution further if 'id' is missing or invalid
    }

    // Retrieve other form fields
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $fb = $_POST['fb'];
    $twitter = $_POST['twitter'];
    $insta = $_POST['insta'];
    $linkdin = $_POST['linkdin'];
    $supply = $_POST['supply'];
    $from_country = $_POST['from_country'];
    $languages = $_POST['languages'];
    $address = $_POST['address'];

    // Call the updateProfile() function and pass the $pdo variable as an argument
    updateProfile($id, $name, $phone, $email, $description, $fb, $twitter, $insta, $linkdin, $supply, $from_country, $languages, $address, $pdo);
}
$pdo = new PDO('mysql:host=172.18.0.2;dbname=clothdatabase', 'root', '786110');

function updateProfile2($id, $name, $phone, $email, $password, $pdo) {
    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Define the query to update the profile details in the database
    $query = "UPDATE `panel_users` SET 
                `name`=:name,
                `phone`=:phone,
                `email`=:email,
                `password`=:password,
                `profile_image_path`=:profile_image_path
              WHERE id=:id";

   

    // Prepare the PDO statement
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
    $stmt->bindParam(':profile_image_path', $new_filename, PDO::PARAM_STR);

    // Process the uploaded profile image, if provided
    if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image']['name'])) {
        // Define the target directory to store the uploaded images
        $target_dir = "profiles/";

        // Get the uploaded file details
        $image = $_FILES['profile_image'];
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];

        // Get the file extension
        $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

        // Define the acceptable file extensions (png, jpg, jpeg)
        $allowed_extensions = array('png', 'jpg', 'jpeg');

        // Check if the file extension is in the allowed list
        if (in_array($image_extension, $allowed_extensions)) {
            // Generate a unique filename to avoid overwriting existing files
            $new_filename = uniqid('profile_', true) . '.' . $image_extension;

            // Set the target file path
            $target_file = $target_dir . $new_filename;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($image_tmp_name, $target_file)) {
                // File upload was successful
                // Update the profile image path in the prepared statement
                // It will be executed when we call $stmt->execute() later
            } else {
                echo "Error uploading profile image.";
                return; // Stop the function execution if the image upload fails
            }
        } else {
            echo "Invalid profile image format. Only PNG, JPG, and JPEG files are allowed.";
            return; // Stop the function execution if the image format is invalid
        }
    } else {
        // If no new image is uploaded, retain the existing profile image path in the database
        $new_filename = $p['profile_image_path'];
    }

    // Execute the prepared statement
    if ($stmt->execute()) {
        $previousPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'profile_view2.php';
        header("Location: " . $previousPage . "?profile=Data%20Saved%20Successfully");
        exit();
    } else {
        echo "Failed to update data in the database.";
    }
}

// Check if the form is submitted and process the update
if (isset($_POST['profile_update2'])) {
    // Check if the 'id' field is present and not empty
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        echo "Error: Invalid or missing 'id' field.";
        exit(); // Stop execution further if 'id' is missing or invalid
    }

    // Retrieve other form fields
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Call the updateProfile2() function and pass the $pdo variable as an argument
    updateProfile2($id, $name, $phone, $email, $password, $pdo);
}





if (isset($_POST['product_delete'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM `products` WHERE id=:id";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  header("location:../products_list.php?msg=Data Deleted Successfully");
}

if (isset($_POST['order_delete'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM `orders` WHERE id=:id";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  header("location:../orders_list.php?msg=Data Deleted Successfully");
}

function getUserName($id)
{
  global $con;
  $name = "not found";

  $sql = "SELECT name FROM panel_users WHERE id=:id";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      $name = $stmt->fetchColumn();
  }

  return $name;
}

function getUserEmail($id)
{
  global $con;
  $email = "not found";

  $sql = "SELECT email FROM panel_users WHERE id=:id";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      $email = $stmt->fetchColumn();
  }

  return $email;
}

if (isset($_POST['delete_msg'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM `chat` WHERE id = :id";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  if ($stmt->execute()) {
      // If the deletion was successful, send a response to the AJAX request
      echo 'Message deleted successfully.';
  } else {
      echo 'Error deleting message.';
  }
}

function getWalletBalance()
{
  global $con;

  $id = $_SESSION['login_user_id'];
  $balance = 0;

  $sql = "SELECT wallet FROM panel_users WHERE id=:id";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      $balance = $stmt->fetchColumn();
  }

  return $balance;
}

if (isset($_POST['withdraw_wallet'])) {
  $id = $_SESSION['login_user_id'];
  $amount = $_POST['wallet_amount'];

  $sql = "UPDATE `panel_users` SET `wallet`=`wallet`-:amount WHERE id = :id";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->bindParam(':amount', $amount, PDO::PARAM_INT);

  if ($stmt->execute()) {
      echo 'Wallet updated successfully!';
  } else {
      echo 'Error updating wallet: ' . $stmt->errorInfo()[2];
  }
}
?>




