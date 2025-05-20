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
