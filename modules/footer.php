<?php require_once 'connect.php' ?>

<?php
$_sql = $pdo->prepare("SELECT * FROM footer");
$_sql->execute();
$array = $_sql->fetch(PDO::FETCH_ASSOC);
?>

<ul>
    <div class="media">
        <a href="https://t.me/mysite"><div class="telegram"><i class="fa-solid fa-paper-plane" style="padding: 20px 20px;"></i></div></a>
        <a href="https://discord.gg/mysite"><div class="vk"><i class="fa-brands fa-discord" style="color: #ffffff; padding: 20px 16px;"></i></div></a>
        <a href="https://youtube.com/mysite"><div class="youtube"><i class="fa-brands fa-youtube" style="color: #ffffff; padding: 18px 16px;"></i></i></div></a>
    </div>
    
        <h1 class="novigation"><?php echo $array["navigation"] ?></h1>
        <li><a href="#"><?php echo $array["donate"] ?></a></li>
        <li><a href="#"><?php echo $array["forum"] ?></a></li>
        <li><a href="#"><?php echo $array["play"] ?></a></li>
</ul>