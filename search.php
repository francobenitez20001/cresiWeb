<?php
require 'classes/Conexion.php';
include 'includes/header.html';
?>
  <div class="w-100"></div>
  <div class="container input_duda">
    <form class="" action="search_process.php" method="get">
      <center><input type="text" name="filtro" class="form-control" placeholder="Filtre pregunas por palabras claves (ej:'pene')">
        <input type="submit" class="btn btn-primary btn-buscar" id="btn-buscar" value="Buscar">
      </center>
    </form>
  </div>
  <?php include 'includes/foot.html' ?>
  <script src="js/menu.js" charset="utf-8"></script>
</body>
</html>
