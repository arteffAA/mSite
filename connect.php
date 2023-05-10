<?php 
$host = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "m-site"; 
$dsn = "mysql:host=localhost;dbname=m-site";
$pdo = new PDO($dsn, $username, $password);

if (!$pdo) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

?>