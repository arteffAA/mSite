<?php 
    session_start();
    unset($_SESSION['logout']);
    header('location:../login.php');
?>
