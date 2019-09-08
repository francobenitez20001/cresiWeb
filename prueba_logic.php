<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "cresi";
$conexion = mysql_connect($host,$user,$pw) or die("problemas en la conexion");
mysql_select_db($db,$conexion);
$datos = $_GET['dudas'];
$query = mysql_query("SELECT pregunta FROM Pregunta2 where pregunta like '%$datos%'") or die("prblemas en la query:".mysql_error());

while ($reg=mysql_fetch_array($query)) {
  echo '<li><a href="#" class="enlace_pregunta">'.$reg['pregunta'].$reg['id_pregunta']"</a></li>";
  echo "<hr>";
}
?>
