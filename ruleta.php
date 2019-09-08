<?php
    require 'config/config.php';
    include 'includes/header.html';
?>
<style media="screen">
    .categoria{
        background-color:#336699;
        width: 80%;
        border-radius: 15px;
    }

    .cartelera{
        font-size: 40px;
        text-align: center;
        margin-top: 80px;
        color: #fff;
        font-family: 'Open Sans', sans-serif;
    }
    .selector{
        font-size: 20px;
    }
</style>
  <div class="ruleta">
    <img src="img/ruleta.png" id="ruleta" width="290px" height="290px" alt="">
    <span class="selector icon ion-arrow-left-b"></span>
  </div>
  <center><div class="categoria">
    <p class="cartelera" id="cat"></p>
  </div></center>
  <?php include 'includes/foot.html' ?>
  <script src="js/jquery_rotate.js" charset="utf-8"></script>
  <script src="js/ruleta.js" charset="utf-8"></script>

</body>
</html>
