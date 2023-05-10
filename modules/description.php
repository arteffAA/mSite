<?php require_once 'connect.php' ?>

<?php
$_sql = $pdo->prepare("SELECT * FROM description");
$_sql->execute();
$array = $_sql->fetch(PDO::FETCH_ASSOC);
?>


        <div class="rectangle">
            <div class="text">
              <h2 class="h2"><?php echo $array["title"] ?></h2>
              <p><?php echo $array["description"] ?></p>
            </div>
          </div>

          <img src="/img/bea-2.png" class="bea-2" style="padding-top: 100px; padding-right: 190px; position: absolute;" width="400px" >
          <div class="rectangle-2">
            <div class="text-2">
              <h3 class="h3"><?php echo $array["title2"] ?></h2>
              <p><?php echo $array["description2"] ?></p>
            </div>
        </div>