<?php
require_once '../connect.php';
session_start();
if(!isset($_SESSION['login'])) {
    header('Location: ../login.php');
    exit();
}

if(isset($_POST["login"]) && isset($_POST["password"])) {
    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);
    
    $stmt = $pdo->prepare("SELECT id, login FROM user WHERE login=:login AND password=:password");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($user) {
        $_SESSION['login'] = $user['login'];
        header('Location:../admin.php');
        exit();
    }
}

header('Location:../login.php');
exit();
?>