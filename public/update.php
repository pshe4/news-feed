<?php

require __DIR__ . '/../vendor/autoload.php';

$feed = new \App\Controllers\FeedController();
$messages = $feed->fetchMessages();

echo json_encode($messages);
