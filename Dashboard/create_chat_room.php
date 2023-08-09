<?php
// Fetch chat room data from the database and store it in $data variable
// ...

// Sort the chat rooms based on last_message_timestamp
usort($data, function($a, $b) {
  $aLastMessageTimestamp = strtotime($a['last_message_timestamp']);
  $bLastMessageTimestamp = strtotime($b['last_message_timestamp']);
  return $bLastMessageTimestamp - $aLastMessageTimestamp;
});

// Return the sorted chat room data as JSON
echo json_encode($data);
?>
