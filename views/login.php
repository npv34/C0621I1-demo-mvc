<?php
session_start();
use Src\Controller\LoginController;

require_once "../src/models/Database.php";
require_once "../src/models/User.php";
require_once "../src/controllers/LoginController.php";

if (isset($_SESSION['login_error'])) {
    echo $_SESSION['login_error'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginController = new LoginController();
    $loginController->login($email, $password);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Email:
    <input type="email" name="email">
    Password:
    <input type="password" name="password">
    Show password
    <input type="checkbox" id="show-password">
    <button type="submit">Login</button>
</form>
</body>
</html>
