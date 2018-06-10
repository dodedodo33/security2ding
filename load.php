<?php

use phpseclib\Crypt\AES;

$stmt = $conn->prepare("SELECT * FROM messages WHERE name = ?");
$stmt->bind_param("s", $name);

$name = $_POST['name'];

if ($stmt->execute()) {
    $result = $stmt->get_result();
    if ($result->num_rows < 1) {
        $message = '<div class="alert alert-danger">Message not found :(</div>';
    } else {
        $cipher = new AES();
        $cipher->setKey($password);
        $data = $result->fetch_object();
        $text = $cipher->decrypt(base64_decode($data->message));
        if (!$text) $message = '<div class="alert alert-danger">Incorrect password :(</div>';
    }
} else {
    $message = '<div class="alert alert-danger">Failed to get message :(</div>';
}

$stmt->close();