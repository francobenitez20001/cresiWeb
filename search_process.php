<?php
include 'includes/header.html';
require 'classes/Conexion.php';
require 'classes/Pregunta.php';
$objPregunta = new Pregunta();
$preguntaFiltro = $objPregunta->listarPreguntaPorFiltro();
?>

<style media="screen">
  .enlace_pregunta{
    cursor: pointer;
    color: #fffffa;
    font-size: 18px;
    margin-left: 5px;
    margin-right: 15px;
  }

  body{
      background-color: #fffffa;
  }

</style>
  <div class="fila_preguntas container">
<?php foreach ($preguntaFiltro as $registros) {
        $filtro = $_GET['filtro'];
?>
        <a class='enlace_pregunta' onclick="masInfo('<?php echo $registros['idpregunta']; ?>')"><?php echo $registros['pregunta']; ?></a>
        <hr>
<?php } ?>
  </div>
  <script type="text/javascript">
    function masInfo(id) {
      window.location.assign("info.php?id=" + id);
    }
  </script>
  <script src="js/menu.js" charset="utf-8"></script>
</body>
</html>
