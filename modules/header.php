<?php require_once 'connect.php' ?>

<?php
$_sql = $pdo->prepare("SELECT * FROM navbar");
$_sql->execute();
$array = $_sql->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
  <nav class="menu">
    <ul> 
      <li><a href="about.php" class="a"><?php echo $array["about"] ?></a></li>
      <li><a href="<?php echo $link; ?>" class="info-1"><?php echo $array["info"] ?></a></li>
      <li><a href="#"><?php echo $array["forum"] ?></a></li></a></li> 
    </ul>
  </nav>
  <div class="end">
    <li><a class="end-16">Более 70% <br>игроков</a></li>
  </div>
</div>
