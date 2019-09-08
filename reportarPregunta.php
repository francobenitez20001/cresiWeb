<?php
  require_once('includes/PHPMailer/class.phpmailer.php');

  $idpregunta = $_POST['idpregunta'];
  $pregunta = $_POST['pregunta'];
  $nombre = $_POST['name'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $cuerpo = "<table width='600' border='0' cellspacing='0' cellpadding='10px'>
                  <tr>
                  <td style='font-size: 14px'>Nombre del reportante: <b>" . $nombre . "</b>
                  </tr>
                  <tr>
                  <td style='font-size: 14px'>Apellido: <b>" . $apellido . "</b>
                  </tr>
                  <tr>
                  <td style='font-size: 14px'>Identificador de pregunta: <b>" . $idpregunta . "</b>
                  </tr>
                  <tr>
                    <td style='font-size: 14px'> Pregunta: <b>" . $pregunta . "</a></b>
                  </tr>
                  <tr>
                    <td style='font-size: 14px'>Mensaje: <b>" . $message . "</b>
                  </tr>
              </table>";

  $asunto = "Reporte de pregunta desde App CrESI";


  $header = "From:".$email."\nReply-To:".$email."\n";
  $header .= "X-Mailer:PHP/".phpversion()."\n";
  $header .= "Mime-Version: 1.0\n";
  $header .= "Content-Type: text/plain";

  $phpMailer= new phpMailer();
  $phpMailer->CharSet = "utf-8";
  $phpMailer->From = $email;
  $phpMailer->FromName = 'CrESI';
  $phpMailer->AddAddress('francobenitez980@gmail.com');
  $phpMailer->Subject = $asunto;
  $phpMailer->Body = $cuerpo;
  $phpMailer->Header = $header;
  $phpMailer->IsHTML(true);




  $phpMailer->set('Subject', $asunto);
  $phpMailer->set('Body', $cuerpo);

  if(!$phpMailer->Send())
  {
    echo "<div class='alert alert-dismissable alert-danger' style='width: 70%!important; margin: 20px auto; text-align: center;'>
            <strong>Error Envio </strong> " . $phpMailer->ErrorInfo . "
          </div><br><br>";
    // header('location: index.php?error=1');
  } else
  {
    header('location: index.php?error=0');
  }

  ?>
