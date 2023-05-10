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
                <h2>Описание сайта</h2>
                <br>
                <a href="../logout.php">Выйти</a>
                <br>
                <a href="../admin/info.php">Информация сайта</a>
                <a href="../admin/description.php">Описание сайта</a>
                <a href="../admin/footer.php">Подвал сайта</a>
            </div>    

            <br>
            <?php 
            $sql=$pdo->prepare("SELECT * FROM description");
            $sql->execute();
            $res=$sql->fetch(PDO::FETCH_OBJ);
            ?>
            
            <form id="form-description" method="post" action="../admin/description.php">
                <input type="text" name="title" value="<?php echo $res->title ?>">
                <input type="text" name="description" value="<?php echo $res->description ?>">
                <input type="text" name="title2" value="<?php echo $res->title2 ?>">
                <input type="text" name="description2" value="<?php echo $res->description2 ?>">
                <br>
                <br>
                <input type="submit" value="Сохранить">
                <div id="message" style="display:none">Изменения сохранены</div>
            </form>

            <script>
                var form = document.getElementById("form-description");
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
            if(isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["title2"]) && isset($_POST["description2"])) {
                $title=$_POST["title"];
                $description=$_POST["description"];
                $title2=$_POST["title2"];
                $description2=$_POST["description2"];

                $row="UPDATE description SET title=:title, description=:description, title2=:title2, description2=:description2";
                $query=$pdo->prepare($row);
                $query->execute(["title"=> $title,"description"=> $description,"title2"=> $title2, "description2"=> $description2]);
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
