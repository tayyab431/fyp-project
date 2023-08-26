<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('config.php');



 $uid=$_SESSION['login_user_id'];
 $utype=$_SESSION['user_type'];
 $cond="AND u2=$uid OR u1=$uid ORDER BY id DESC";
 $data=get('chat_room',$cond);
// Assuming you have fetched the chat data and stored it in $data variable


?>
  <style>
    .user-meta-time {
      position: absolute;
      top: 5px;
      right: 5px;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: blue;
      display: none; /* Initially hide the blue dot */
    }
  </style>
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('205e1b728241d54a3443', {
      cluster: 'ap2'
    });

    function rearrangeChats() {
    var allChats = $('.person');
    allChats.sort(function (a, b) {
        var aTimestamp = $(a).data('last-message-timestamp');
        var bTimestamp = $(b).data('last-message-timestamp');
        return bTimestamp - aTimestamp;
    });
    $('.chat-system .people').html(allChats);
}

    
    function sendMessage() {
  var sender = $("#m_sender").val();
  var receiver = $("#m_receiver").val();
  var room = $("#m_room").val();
  var message = $("#m_message").val();

  $.ajax({
    url: "includes/functions.php",
    type: "POST",
    data: {
      send_message: 1,
      sender: sender,
      receiver: receiver,
      room: room,
      message: message,
    },
    cache: false,
    success: function (dataResult) {
   
      getChatRoomData(sender, receiver); 
    },
    error: function (error) {
      console.log(error);
    },
  });
}

    var channel = pusher.subscribe('fyp');
    channel.bind('my-event', function (data) {
      var paybtn = '';

      if (data.sender == <?= $uid ?>) {
        var mclass = 'me';
      }

      if (data.reciever == <?= $uid ?>) {
        paybtn = document.createElement('script');
        paybtn.src = 'https://checkout.stripe.com/checkout.js';
        paybtn.classList.add('stripe-button');
        paybtn.setAttribute('data-key', '<?php echo $publishableKey?>');
        paybtn.setAttribute('data-amount', '10000'); // Amount in cents (e.g., 10000 for $100.00)
        paybtn.setAttribute('data-name', 'jeans');
        paybtn.setAttribute('data-description', 'Pay for Offer');
        paybtn.setAttribute('data-image', 'https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg');
        paybtn.setAttribute('data-currency', 'pkr');
        paybtn.setAttribute('data-email', 'clothing.barter@gmail.com');
        var mclass = 'you';
      }

      if (data.is_offer == 1) {
        var messageHtml = `<div class="bubble ${mclass}" data-message-id="${data.chat_id}">
          <div class="card p-4 shadow">
            <p>Offer</p>
            <p>Product : ${data.product_name}</p>
            <p>Amount : ${data.amount}</p>  
            <form action="submit.php" method="post">
              <input type="hidden" name="amount" value="${data.amount}" id="">
              <input type="hidden" name="user_id" value="${data.reciever}" id="">
              <input type="hidden" name="menu_id" value="${data.sender}" id="">
              <input type="hidden" name="c_id" value="${data.chat_id}" id="">
              <input type="hidden" name="product_id" value="${data.product_id}" id="">
              ${data.reciever == <?= $uid ?> ? paybtn.outerHTML : ''}
            </form>
          </div>
        </div>`;
      } else {
        var messageHtml = `<div class="bubble ${mclass}" data-message-id="${data.chat_id}">${data.message} 
          <svg style="margin:6px; cursor:pointer" onclick="deleteMessage(${data.chat_id})" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
        </div>`;
      }

      var chatContainer = $('.chat-conversation-box');
      var isChatOpen = chatContainer.find('.active-chat[data-chat="' + data.sender + '"]').length > 0;

      // Check if the chat with the sender exists
      if (isChatOpen) {
        var appendMessage = chatContainer.find('.active-chat[data-chat="' + data.sender + '"]').append(messageHtml);
      } else {
        var appendMessage = $('.mail-write-box').parents('.chat-system').find('.active-chat').append(messageHtml);
      }

      const getScrollContainer = document.querySelector('.chat-conversation-box');
      getScrollContainer.scrollTop = getScrollContainer.scrollHeight;
      $("#last_message").html(data.message);

      // Add or remove the blue dot based on the chat's open status
      if (isChatOpen) {
        removeBlueDot(data.sender);
      } else if (data.sender !== <?= $uid ?>) {
        addBlueDot(data.sender);
      }

      

      // Update the active chat element if the new message belongs to the active chat
      var activeChatDataChat = chatContainer.find('.active-chat').attr('data-chat');
      if (activeChatDataChat == data.sender) {
        chatContainer.find('.active-chat').append(messageHtml);
      }
         
        // Update the last message timestamp for the chat room
    var chatRoom = $('.person[data-reciever="' + data.sender + '"]');
    chatRoom.attr('data-last-message-timestamp', data.timestamp);

    // Rearrange chats based on the updated last message timestamp
    rearrangeChats();
    });

    // Function to check if a chat with a user exists
    function checkChatExistence(user) {
      var chatContainer = $('.chat-conversation-box');
      return chatContainer.find('.active-chat[data-chat="' + user + '"]').length > 0;
    }

// Function to get chat room data and update last_message_timestamp
function getChatRoomData(user1, user2) {
  $.ajax({
    url: "includes/functions.php",
    type: "POST",
    data: {
      get_chat_room_data: 1,
      user1: user1,
      user2: user2,
    },
    dataType: "json",
    success: function (data) {
      // Update the last_message_timestamp in the chat room
      if (data && data.last_message_timestamp) {
        var roomId = data.id;
        var lastMessageTimestamp = data.last_message_timestamp;

        $.ajax({
          url: "includes/functions.php",
          type: "POST",
          data: {
            update_last_message_timestamp: 1,
            roomId: roomId,
            lastMessageTimestamp: lastMessageTimestamp,
          },
          success: function () {
            // Rearrange chats based on the last message timestamp
            rearrangeChats();
          },
        });
      }
    },
    error: function (error) {
      console.log(error);
    },
  });
}
$(document).ready(function () {
    rearrangeChats();
  });

    function sendOffer() {
      var sender = $("#m_sender").val();
      var reciever = $("#m_reciever").val();
      var room = $("#m_room").val();
      var product = $("#product_id").val();
      var amount = $("#offer_amount").val();

      $.ajax({
        url: "includes/functions.php",
        type: "POST",
        data: {
          send_offer: 1,
          sender: sender,
          reciever: reciever,
          room: room,
          product: product,
          amount: amount,
          message: 'Offer',
        },
        cache: false,
        success: function (dataResult) {
          $('#exampleModalCenter').modal('toggle');
          // Rearrange chats based on the last message timestamp after sending the offer
          rearrangeChats();
        }
      });
    }

    function deleteMessage(messageId) {
      if (confirm('Are you sure you want to delete this message?')) {
        // AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/functions.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // If the deletion was successful, remove the chat message
            var bubble = document.querySelector('[data-message-id="' + messageId + '"]');
            if (bubble) {
              bubble.remove();
            }
          }
        };
        // Include the delete_msg parameter in the request
        var params = 'id=' + encodeURIComponent(messageId) + '&delete_msg=1';
        xhr.send(params);
      }
    }
  </script>


<div class="chat-section layout-top-spacing">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="chat-system">
        <div class="hamburger">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </div>
        <div class="user-list-box">
          <div class="search">
            <input type="text" class="form-control" placeholder="Search User" />
          </div>
          <div class="people">
            <?php
          
          if (!empty($data)) {
              foreach ($data as $p) {
                  $other_user = 0;
                  if ($p['u1'] == $uid) {
                      $other_user = $p['u2'];
                  }
                  if ($p['u2'] == $uid) {
                      $other_user = $p['u1'];
                  }
                  
                  $condition = "AND id=$other_user";
                  $other_user_name = '';
                  $last_message = '';
                  $room_idD = $p['id'];
$cond = "AND room_id=$room_idD";
$chats = get('chat', $cond);


$last_message_sender_name = ''; // Initialize the variable to store sender's name
$last_message_timestamp = '';   // Initialize the variable to store timestamp

$last_message_sender_id = '';  // Initialize an empty variable to store the sender's ID

if (!empty($chats)) {
    // Sort the chat messages by timestamp in descending order
    usort($chats, function ($a, $b) {
        if (isset($a['timestamp']) && isset($b['timestamp'])) {
            return strtotime($b['timestamp']) - strtotime($a['timestamp']);
        } else {
            return 0;
        }
    });

    // Get the first (latest) message and its sender's ID
    $last_message = $chats[0]['message_text'];
    $last_message_timestamp = $chats[0]['timestamp'];
    $last_message_sender_id = $chats[0]['sender_id'];
}
if (isset($last_message_sender_id) && $last_message_sender_id != '') {
  $sender_query = "SELECT name FROM panel_users WHERE id = :sender_id";
  $sender_statement = $pdo->prepare($sender_query);
  $sender_statement->execute(['sender_id' => $last_message_sender_id]);

  if ($sender_row = $sender_statement->fetch(PDO::FETCH_ASSOC)) {
      $last_message_sender_name = $sender_row['name'];
  }
}    
          
                  $OtherUserdata = get('panel_users', $condition);
                  if (!empty($OtherUserdata)) {
                      foreach ($OtherUserdata as $u) {
                          $other_user_name = $u['name'];
                          $other_user_profile_picture = 'includes/profiles/' . $u['profile_image_path']; // Replace 'profile_image_path' with the actual column name in the database that stores the profile picture URL
                      }
                  } else {
                      // If user data not found, set default values
                      $other_user_name = 'Unknown User';
                      $other_user_profile_picture = '../includes/profiles/default_profile_picture.jpg'; // Replace with the default profile picture path
                  }
                  $sender_name = 'You'; // Variable to store the sender's name
$receiver_name = ''; // Variable to store the receiver's name

// Fetch the sender's name
$sender_data = get('panel_users', "AND id = $uid");
if (!empty($sender_data)) {
    $sender_name = $sender_data[0]['name'];
}


                  ?>
                   <div class="person" data-chat="person<?= $other_user ?>" data="<?= $room_idD ?>" data-sender="<?= $uid ?>" data-reciever="<?= $other_user ?>" data-last-message-timestamp="<?= strtotime($last_message_timestamp) ?>">
                      <div class="user-info">
                          <div class="f-head">
                              <img src="<?= $other_user_profile_picture ?>" alt="avatar">
                          </div>
                          <div class="f-body">
    <div class="meta-info">
        <span class="user-name" data-name="Sean Freeman"><?= $other_user_name ?></span>
        <span class="user-meta-time"></span>
    </div>
    <?php if ($last_message_sender_id == $uid && $utype == 'Customer'): ?>
        <span class="preview">You: <?= $last_message ?></span>
    <?php else: ?>
        <span class="preview"><?= $last_message_sender_name !== $other_user_name ? $last_message_sender_name . ': ' : '' ?>
        <?= $last_message?></span>
    <?php endif; ?>
</div>


                      </div>
                  </div>
              <?php
              }
          }
          ?>
          
          </div>
        </div>
        <div class="chat-box">
          <div class="chat-not-selected">
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Click User To Chat
            </p>
          </div>
          <div class="chat-box-inner">
            <div class="chat-meta-user">
              <div class="current-chat-user-name">
                <span><img src="<?= $other_user_profile_picture ?>" alt="avatar"><span class="name"></span></span>
              </div>

              <div class="chat-action-btn align-self-center">
                <?php if ($utype == 'Manufacturer') { ?>
                  <button class="btn btn-success m-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Send Offer</button>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="chat-conversation-box">
              <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">
              <?php
// Define the array to store the paid offer IDs
$paidOffers = array();

if (!empty($data)) {
    $other_user = 0;
    $room_id = 0;
    foreach ($data as $p) {
        $room_id = $p['id'];
        if ($p['u1'] == $uid) {
            $other_user = $p['u2'];
        }
        if ($p['u2'] == $uid) {
            $other_user = $p['u1'];
        }
        ?>
     <div class="chat" data-chat="person<?= $other_user ?>">
     <?php
$cond = "AND room_id=$room_id";
$chats = get('chat', $cond);
if (!empty($chats)) {
  foreach ($chats as $c) {
      // Fetch the sender's name from the database based on sender_id
      $sender_name = "";
      if ($c['sender_id'] == $uid) {
          $m_class = 'me';
          // Set the name for the sender as "You"
          $sender_name = "You";
      } else {
          $m_class = 'you';
          // Fetch the receiver's name from the database based on receiver_id (here, $other_user is receiver's ID)
          // Replace "users" with the actual table name where user details are stored
          $receiver_name = ""; // Set the default value if receiver's name not found in the database
          $receiver_id = $other_user; // Assuming $other_user is receiver's ID
          $receiver_data = get('panel_users', "AND id=$receiver_id");
          if (!empty($receiver_data)) {
              // Assuming that the name column in the "users" table contains the name of the user
              $receiver_name = $receiver_data[0]['name'];
          }
      }
      ?>
      <div class="bubble <?= $m_class ?>" data-message-id="<?php echo $c['id']; ?>">
          <?php
          // Display the sender's name along with the chat message for "me" class
          if ($m_class == 'me') {
              echo '<p class="sender-name">' . $sender_name . '</p>';
          }
          // Display the receiver's name along with the chat message for "you" class
          if ($m_class == 'you') {
              echo '<p class="receiver-name">' . $receiver_name . '</p>';
          }
          ?>


                    <?php
if ($c['is_offer'] == 1) {
    $pname = '';
    $pid = $c['product_id'];
    $cond = "AND id=$pid";
    $data = get('products', $cond);
    if (!empty($data)) {
        foreach ($data as $p) {
            $pname = $p['name'];
        }
    }
?>
<div class="card p-4 shadow">
    <p class="text-center"><?= $c['message_text'] ?></p>
    <p><?='Product : '.$pname?></p>
    <p><?='Amount : '.$c['price']?></p>
    <?php if ($utype == 'Customer') { ?>
        <?php if ($c['status'] == 1) { 
            echo '<button class="btn btn-success">Paid</button>';
        } else if ($c['status'] != 1) { ?>
            <form action="submit.php" method="post">
                <input type="hidden" name="amount" value="<?= $c['price'] ?>" id="">
                <input type="hidden" name="user_id" value="<?= $c['reciever_id'] ?>" id="">
                <input type="hidden" name="menu_id" value="<?= $c['sender_id'] ?>" id="">
                <input type="hidden" name="c_id" value="<?= $c['id'] ?>" id="">
                <input type="hidden" name="product_id" value="<?= $pid ?>" id="">
                <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="<?php echo $publishableKey ?>"
                    data-amount="<?= $c['price'] * 100 ?>"
                    data-name="<?= $pname ?>"
                    data-description="Pay for Offer"
                    data-image="icons8-card-payment-48.png"
                    data-currency="pkr"
                    data-email="clothing.barter@gmail.com"
                >
                </script>
            </form>
        <?php } ?>
    <?php } ?>
</div>
<?php
} else {
?>
    <?= $c['message_text'] ?>
<?php
}
?>

                        <?php if ($m_class == 'me') { ?>
                            <svg style="margin:6px; cursor:pointer" onclick="deleteMessage(<?php echo $c['id']; ?>)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php }
}
?>


              </div>
            </div>
            <div class="chat-footer">
              <div class="chat-input">
                <form class="chat-form" action="javascript:void(0);">
                  <input type="hidden" name="" id="m_sender">
                  <input type="hidden" name="" id="m_reciever">
                  <input type="hidden" name="" id="m_room">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                  <input type="text" class="mail-write-box form-control" placeholder="Message" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-light" id="exampleModalCenterTitle">Make Offer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>
      <div class="modal-body">
        <select class="form-control m-2" required name="product_id" id="product_id">
          <option value="">Select Product</option>
          <?php
          $uid = $_SESSION['login_user_id'];
          $cond = "AND manufacturer_id=$uid";
          $data = get('products', $cond);
          if (!empty($data)) {
            foreach ($data as $p) {
          ?>
              <option value="<?= $p['id'] ?>"><?= $p['name'] ?></option>
          <?php
            }
          }
          ?>
        </select>
        <input type="number" class="form-control m-2" name="offer_amount" id="offer_amount" placeholder="Enter Amount" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="sendOffer()">Send Offer</button>
      </div>
    </div>
  </div>
</div>


  <script>
                                        
   function sendOffer(){
    var sender = $("#m_sender").val();
    var reciever = $("#m_reciever").val();
    var room = $("#m_room").val();
    var product = $("#product_id").val();
    var amount = $("#offer_amount").val();
  
    $.ajax({
    url: "includes/functions.php",
    type: "POST",
    data:{
      send_offer:1,
      sender:sender,
      reciever:reciever,
      room:room,
      product:product,
      amount:amount,
      message:'Offer',
    },
    cache: false,
    success: function(dataResult){
        // $messageHtml =`<div class="bubble me">
        //                                                        <div class="card p-4 shadow">
        //                                                             <p>Offer</p>
        //                                                             <p>Product : ${dataResult}</p>
        //                                                             <p>Amount : ${amount}</p>
        //                                                         </div></div>`;
        // var appendMessage = $('.mail-write-box').parents('.chat-system').find('.active-chat').append($messageHtml);
        // const getScrollContainer = document.querySelector('.chat-conversation-box');
        // getScrollContainer.scrollTop = getScrollContainer.scrollHeight;
        $('#exampleModalCenter').modal('toggle');
     
           
      
    }
      });
     }

    </script>


<script>
function deleteMessage(messageId) {
    if (confirm('Are you sure you want to delete this message?')) {
        // AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/functions.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // If the deletion was successful, remove the chat message
                var bubble = document.querySelector('[data-message-id="' + messageId + '"]');
                if (bubble) {
                    bubble.remove();
                }
            }
        };
        // Include the delete_msg parameter in the request
        var params = 'id=' + encodeURIComponent(messageId) + '&delete_msg=1';
        xhr.send(params);
    }
}
</script>

