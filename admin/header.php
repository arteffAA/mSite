<?php
session_start();
require_once '../connect.php';

if(isset($_POST["about"]) && isset($_POST["info"]) && isset($_POST["forum"])) {
    $about=$_POST["about"];
    $info=$_POST["info"];
    $forum=$_POST["forum"];

    $row="UPDATE navbar SET about=:about,info=:info,forum=:forum";
    $query=$pdo->prepare($row);
    $query->execute(["about"=> $about,"info"=> $info,"forum"=> $forum]);
}

$sql=$pdo->prepare("SELECT * FROM navbar");
$sql->execute();
$res=$sql->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div style="text-align:center">
        <?php if(!empty($_SESSION["login"])): ?>
            <div>
                <h2>Панель администратора</h2>
                <h2>Шапка сайта</h2>
                <br>
                <a href="../logout.php">Выйти</a>
                <br>
                <a href="../admin/info.php">Информация сайта</a>
                <a href="../admin/description.php">Описание сайта</a>
                <a href="../admin/footer.php">Подавал сайта</a>
            </div>    

            <br>

            <form action="../admin/header.php" method="post" id="form-header">
                <input type="text" name="about" value="<?php echo $res->about ?>">
                <input type="text" name="info" value="<?php echo $res->info ?>">
                <input type="text" name="forum" value="<?php echo $res->forum ?>">
                <br>
                <br>
                <input type="submit" value="Сохранить"><br>
                <div id="message" style="display:none">Изменения сохранены</div>
            </form>

            <script>
                var form = document.getElementById("form-header");
                form.addEventListener("submit", function(event) {
                    event.preventDefault();
                    var xhr = new XMLHttpRequest();
                    xhr.open(form.method, form.action, true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            document.getElementById("message").style.display = "block";
                            setTimeout(function() {
                                document.getElementById("message").style.display = "none";
                            }, 1000);
                        }
                    };
                    xhr.send(new FormData(form));
                });
            </script>
            
        <?php else: ?>
            <h2>Вы не авторизованы</h2>
            <br>
            <a href="../login.php">Войти</a>
        <?php endif; ?>
    </div> 
</body>
</html>
