<?php

use phpseclib\Crypt\AES;
$cipher = new AES();
$cipher->setKey($password);

$stmt = $conn->prepare("INSERT INTO messages (name, message) VALUES (?, ?) ON DUPLICATE KEY UPDATE name=?, message=?");
$stmt->bind_param("ssss", $name, $message, $name, $message);

$name = $_POST['name'];
$message = base64_encode($cipher->encrypt($_POST['message']));

if ($stmt->execute()) {
    $message = '<div class="alert alert-success">Successfully saved!</div>';
} else {
    $message = '<div class="alert alert-danger">Saving failed :(</div>';
}

$stmt->close();