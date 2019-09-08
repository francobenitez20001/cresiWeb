<?php

require 'conexion.php';
$conexion = mysqli_connect($host,$user,$pw,$db);
$duda = $_GET['duda'];
$query = "SELECT * FROM pregunta2 WHERE pregunta LIKE '%$duda%'";
$reg = mysqli_query($conexion,$query);
while ($registros=mysqli_fetch_array($reg)) {
  echo '<li><a href="#" class="enlace_pregunta">'.$registros['pregunta']."</a></li>";
  echo "<hr>";
  }
?>
