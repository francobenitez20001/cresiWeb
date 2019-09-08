<?php
require 'classes/Conexion.php';


function listarPregunta()
{
  $link = Conexion::Conectar();
  $sql = "SELECT pregunta,respuestaCorrecta,masInformacion FROM pregunta";
  $stmt = $link->prepare($sql);
  $stmt->execute();
  $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $resultado;
}

$listadoPregunta = listarPregunta();


?>
