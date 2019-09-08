<?php

  class Pregunta
  {
    private $idpregunta;
    private $pregunta;
    private $categoria;
    private $respuesta1;
    private $respuesta2;
    private $respuesta3;
    private $respuestaCorrecta;
    private $masInformacion;

    public function preguntaJuego()
    {
      $i=0;
      $opcion1="";
      $opcion2="";
      $opcion3="";
      $opcion4="";
      $respuesta_correcta="";
      $categoria = $_GET['categoria'];
      if($categoria == 'Azar'){
        switch (rand(1,5)) {
          case 1:
            $categoria = "Derecho";
            break;
          case 2:
            $categoria = "Diversidad";
            break;
          case 3:
            $categoria = "Salud";
            break;
          case 4:
            $categoria = "Prevención";
            break;
          case 5:
            $categoria = "Proyecto";
            break;
        }
      }

      $link = Conexion::conectar();
      $sql = "SELECT * FROM pregunta
              WHERE categoria = '".$categoria."'
              ORDER BY RAND() LIMIT 0,1";
      // echo $query;
      $stmt = $link->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
      $chequeo = $this->salidaPregunta($resultado['idpregunta']);
      if (!$chequeo) {
        $this->preguntaJuego();
      }else {
        return $resultado;
      }
    }

    public function salidaPregunta($id)
    {
      $i = count($_SESSION['preguntaRespondida']);
      if (in_array($id,$_SESSION['preguntaRespondida'])) {
        return false;
      }else {
        $_SESSION['preguntaRespondida'][$i] = $id;
        $i = $i+1;
        return true;
      }
    }

    public function listarPreguntaPorFiltro()
    {
      $filtro = $_GET['filtro'];
      $link = Conexion::Conectar();
      $sql = "SELECT * FROM pregunta
              WHERE pregunta LIKE '%$filtro%'
					    OR idpregunta LIKE '%$filtro%'
              OR categoria LIKE '%$filtro%'";
      $stmt = $link->prepare($sql);
      $stmt->execute();
      $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $registros;
    }

    public function verPreguntaPorId()
    {
      $idpregunta = $_GET['id'];
      $link = Conexion::Conectar();
      $sql = "SELECT * FROM pregunta
              WHERE idpregunta = '".$idpregunta."'";
      $stmt = $link->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
      return $resultado;
    }


  }
