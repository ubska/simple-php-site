<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));


if (strlen($login) < 2) {
    echo "Login must be at least 4 characters long";
    exit;
}
if (strlen($password) < 4) {
    echo "Password must be longer";
    exit;
}


// DB
require "db.php";

// password
$salt = '55àù+è"£$%&/%_5';
$password = md5($salt . $password);


// auth user
$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);


if ($query->rowCount() == 0) {
    echo "user not exist";
} else {
    setcookie('login', $login, time() + 3600 * 24 * 30, "../index.php");
    header('Location: ../user.php');
}
