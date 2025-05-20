<?php
$image = trim(filter_var($_POST['image'], FILTER_SANITIZE_SPECIAL_CHARS));
$followers = trim(filter_var($_POST['followers'], FILTER_SANITIZE_SPECIAL_CHARS));


// DB
require "db.php";
//INSERT
$sql = 'INSERT INTO trending(image, followers) VALUES(?,?)';
//  prepara una query SQL per essere eseguita
$query = $pdo->prepare($sql);
// eseguo la query 
$query->execute([$image, $followers]);


header('Location: ../trending.php');
