<?php 
include '../modules/count.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <?php include("modules/head.php"); ?>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

  <body id="my-page">
    <header>
    <?php
        $homeLinkText = "ИНФОРМАЦИЯ";
        $link = "info.php";
      ?>
      <?php include('modules/header.php'); ?>
    </header>         
  </body>

  <img src="/img/bea.png" class="bea" style="float: right; padding-right: 20px; padding-top: 50px;" width="500px">

      <main class="main">
         <?php include("modules/info.php"); ?>
      </main>

      <section class="info element-show">
        <div class="blcok">
            <p><i class="fa-solid fa-medal" style="color: #9A855C;"></i> Лучший игровой лаунчер
                по <span class="gray">версии ГРАВИТ БОМБИТ</span></p>
            <p><i class="fa-solid fa-bolt" style="color: #9A855C;"></i> Лучшая игра, сборка по <span class="gray">версии РУМАЙН</span></p>
        </div>

        <div class="block-1">
            <p><i class="fa-solid fa-diagram-project" style="color: #9A855C;"></i> Лучшее комьюнити
                по версии <span class="gray">dwdwdwwdw</span></p>
            <p><i class="fa-solid fa-star" style="color: #9A855C;"></i> Лучший политический проект в <span class="gray">MINCRAFT
                по версии POLITRAKI</span></p>
        </div>
      </section>

      <section class="test element-show">
        <?php include("modules/description.php"); ?>

        <div class="t fade-in">
          <img src="img/atmosfera.png" class="image" width="800px">
          <img src="img/image-2.png" class="image-2" width="800px">
        </div>



          <div class="interes fade-in">
            <h1 data-text="По-настоящему интересно">По-настоящему интересно</h1>
          </div>
    </section>

    <footer class="top-100">

      <?php include('modules/footer.php'); ?>

    </footer>


</html>