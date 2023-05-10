<?php
session_start();
if (empty($_SESSION['login'])) {
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="../admin/style/admin.css">
</head>

<body>
    <div style="text-align:center">
        <?php if(!empty($_SESSION["login"])): ?>
            <h2>Панель администратора</h2>
            <br>
            <a href="../logout.php">Выйти</a>
            <br>
            <a href="../admin/header.php">Шапка сайта</a>
            <a href="../admin/info.php">Информация сайта</a>
            <a href="../admin/description.php">Описание сайта</a>
            <a href="../admin/footer.php">Подавал сайта</a>

            <?php else: ?>
            <h2>Вы не авторизованы</h2>
            <br>
            <a href="../login.php">Войти</a>
        <?php endif; ?>
    </div> 


    <?php 
    if(!empty($_SESSION["login"])){
    }
    ?>
     
</body>
</html>

<?php
?>