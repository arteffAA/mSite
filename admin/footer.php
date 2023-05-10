<?php
session_start();
require_once '../connect.php';
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
            <?php 
            $sql=$pdo->prepare("SELECT * FROM footer");
            $sql->execute();
            $res=$sql->fetch(PDO::FETCH_OBJ);
            ?>
            
            <form id="form-footer" method="post" action="../admin/footer.php">
                <input type="text" name="navigation" value="<?php echo $res->navigation ?>">
                <input type="text" name="donate" value="<?php echo $res->donate ?>">
                <input type="text" name="forum" value="<?php echo $res->forum ?>">
                <input type="text" name="play" value="<?php echo $res->play ?>">
                <br>
                <br>
                <input type="submit" value="Сохранить">
                <div id="message" style="display:none">Изменения сохранены</div>
            </form>

            <script>
                var form = document.getElementById("form-footer");
                form.addEventListener("submit", function(event) {
                    event.preventDefault();
                    var xhr = new XMLHttpRequest();
                    xhr.open(form.method, form.action, true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            document.getElementById("message").style.display = "block";
                            setTimeout(function() {
                                document.getElementById("message").style.display = "none";
                                location.reload();
                            }, 1000);
                        }
                    };
                    xhr.send(new FormData(form));
                });
            </script>
        
            <?php 
            if(isset($_POST["navigation"]) && isset($_POST["donate"]) && isset($_POST["forum"]) && isset($_POST["play"])) {
                $navigation=$_POST["navigation"];
                $donate=$_POST["donate"];
                $forum=$_POST["forum"];
                $play=$_POST["play"];

                $row="UPDATE footer SET navigation=:navigation,donate=:donate,forum=:forum,play=:play";
                $query=$pdo->prepare($row);
                $query->execute(["navigation"=> $navigation,"donate"=> $donate,"forum"=> $forum, "play"=> $play]);
            }   
            ?> 
            
        <?php else: ?>
            <h2>Вы не авторизованы</h2>
            <br>
            <a href="../login.php">Войти</a>
        <?php endif; ?>
    </div> 

     
</body>
</html>
