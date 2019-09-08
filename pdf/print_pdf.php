<?php
  require './vendor/autoload.php';
  use Spipu\Html2Pdf\Html2Pdf;
  ob_start();
  require 'print_view.php';
  $html = ob_get_clean();
  $html2Pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
  $html2Pdf->writeHTML($html);
  $html2Pdf->output('preguntasCresi.pdf');
?>
