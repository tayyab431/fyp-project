<?php
// Database connection details

session_start();
$host = '172.18.0.2';
$db = 'clothdatabase';
$user = 'root';
$password = '786110';

try {
    $con = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(array('success' => false, 'message' => 'Connection failed: ' . $e->getMessage()));
    exit();
}

// Check if the user is logged in as a Customer and the 'manufacturerId' parameter is set
if ($_SESSION['user_type'] === 'Customer' && isset($_POST['manufacturerId'])) {
    $customerId = $_SESSION['login_user_id'];
    $manufacturerId = $_POST['manufacturerId'];

    // Check if a chat room already exists between the Customer and the Manufacturer
    try {
        $query = "SELECT * FROM `chat_room`
                  WHERE (`u1` = :customerId AND `u2` = :manufacturerId) OR
                        (`u1` = :manufacturerId AND `u2` = :customerId)";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':customerId', $customerId);
        $stmt->bindParam(':manufacturerId', $manufacturerId);
        $stmt->execute();

        $chatRoom = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($chatRoom) {
            // Redirect to the existing chat room
            echo json_encode(array('success' => true, 'chatRoomId' => $chatRoom['id']));
            exit();
        } else {
            // Create a new chat room with the customer and manufacturer
            $query = "INSERT INTO `chat_room`(`u1`, `u2`, `date`, `status`)
                      VALUES (:customerId, :manufacturerId, NOW(), 1)";
            $stmt = $con->prepare($query);
            $stmt->bindParam(':customerId', $customerId);
            $stmt->bindParam(':manufacturerId', $manufacturerId);
            $stmt->execute();

            // Get the ID of the newly created chat room
            $chatRoomId = $con->lastInsertId();

            echo json_encode(array('success' => true, 'chatRoomId' => $chatRoomId));
            exit();
        }
    } catch (PDOException $e) {
        echo json_encode(array('success' => false, 'message' => 'Error creating chat room: ' . $e->getMessage()));
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id']) && isset($_POST['room_id'])) {
    // Fetch and display chat messages for the specific user and chat room
    $user_id = $_POST['user_id'];
    $room_id = $_POST['room_id'];

    try {
        $cond = "AND room_id = :room_id ORDER BY timestamp ASC";
        $query = "SELECT * FROM `chat` WHERE room_id = :room_id ORDER BY timestamp ASC";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':room_id', $room_id, PDO::PARAM_INT);
        $stmt->execute();

        // Create HTML representation of chat messages
        $chatMessages = '';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $m_class = ($row['sender_id'] == $user_id) ? 'me' : 'you';
            $messageText = $row['message_text'];
            $chatMessages .= "<div class='bubble $m_class' data-message-id='{$row['id']}'>$messageText</div>";
        }

        if (!empty($chatMessages)) {
            echo json_encode(array('success' => true, 'chatMessages' => $chatMessages));
        } else {
            echo json_encode(array('success' => true, 'chatMessages' => '<div class="bubble">No messages yet.</div>'));
        }
    } catch (PDOException $e) {
        echo json_encode(array('success' => false, 'message' => 'Error fetching chat messages: ' . $e->getMessage()));
        exit();
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request'));
    exit();
}
?>
