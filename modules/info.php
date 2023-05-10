<?php require_once 'connect.php' ?>

<?php
$_sql = $pdo->prepare("SELECT * FROM info");
$_sql->execute();
$array = $_sql->fetch(PDO::FETCH_ASSOC);
?>

    <h1 data-text="<?php echo $array ['title']?>"><?php echo $array ['title']?></h1>
    <p class="discr"><?php echo $array ['description']?></p>

    <div class = "buttons">  
        <a href="https://www.minecraft.net/ru-ru/login" class="button">Начать играть</a>
        <a href="https://www.minecraft.net/ru-ru/login" class="button-1">О нас</a>
    </div>  
