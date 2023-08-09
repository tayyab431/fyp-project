<?php
require __DIR__ . 'vendor/../vendor/autoload.php';

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

  $data['message'] = 'Raja Tayyab';
  $pusher->trigger('fyp', 'my-event', $data);
?>