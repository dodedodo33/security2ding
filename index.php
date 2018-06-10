<?php

require __DIR__ . '/vendor/autoload.php';
require './database.php';

$message = '';
$text = '';
$name = '';

if(!empty($_POST) ) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $message = $_POST['message'];

    if ($name && $password) {
        if ($message) {
            require './save.php';
        } else {
            require './load.php';
        }
    }
}

$conn->close();

?>
<html>
<head>
    <title>Encryption :)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php echo $message; ?>
    <form action="./" method="POST" style="margin: auto; width: 100%; max-width: 400px; margin-top: 50px;">
        <h1>Encryption baby!</h1>
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label for="message">Message: </label>
            <textarea name="message" class="form-control"><?php echo $text; ?></textarea>
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
