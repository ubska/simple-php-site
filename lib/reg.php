<?php
// La funzione filter_var() viene utilizzata per filtrare e sanitizzare i dati.
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));


if (strlen($login) < 4) {
    echo "Login must be at least 4 characters long";
    exit;
}

if (strlen($email) < 4 && str_contains($email, '@')) {
    echo "The login must be a valid email address";
    exit;
}

if (strlen($username) < 4) {
    echo "Please enter a longer username.";
    exit;
}

if (strlen($password) < 4) {
    echo "Password must be longer";
    exit;
}

//DB
// PDO è una classe in PHP che permette di connettersi a un database
$pdo = new PDO('mysql:hots=localhost;dbname:php-website;port=8889', 'root', 'root');


//INSERT
// query SQL per inserire nuovi dati nella tabella users del DB
// ???? protegge il codice da SQL injection
$sql = 'INSERT INTO users(login, username, email, password) VALUES(?,?,?,?)';
