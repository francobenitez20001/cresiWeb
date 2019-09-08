<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
    <title>CrESI APP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <script src="js/sweetalert2.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png">
    <style>
      .header{
        background-color: #336699;
        width: 100%;
      }

      .form{
        text-align: center;
      }

      .label{
        font-size: 20px;
        font-weight: bold;
        color: #fff;
        margin-top: 30px;
        margin-bottom: 30px;
      }

      .input{
        background-color: #b6b6b6;
        width: 250px;
      }


      .con{
        font-weight: bold;
        margin: 0;
        padding: 0;
      }

      .btn-login{
        background-color: #fff;
        margin: 15px;
        color: #9932cc;
        text-align: center;
      }

    </style>
</head>
<body>
<?php if (isset($_GET['error']) && $_GET['error']==1) {?>

    <script type="text/javascript">
        Swal.fire({
            type: 'error',
            title: 'Error',
            text: 'Nombre de usuario y/o clave incorrecta',
            confirmButtonColor: '#f44242'
        })
    </script>
<?php }elseif(isset($_GET['error']) && $_GET['error']==2){?>
    <script type="text/javascript">
        Swal.fire({
            type: 'error',
            title: 'Error',
            text: 'Para ver esta página debes iniciar sesión previamente!',
            confirmButtonColor: '#f44242'
        })
    </script>
<?php }?>

  <div class="header">
    <span class="header-logo">
      <img src="img/logo2.png" alt="" width="90" height="90">
    </span>
  </div>
  <div class="form form-group" id="formd">
    <div class="container">
      <form action="loginUser.php" class="form-group" method="POST">
        <label for="" class="label">USUARIO:</label>
        <center><input name="username" type="text" class="form-control input" id="input_User"></center>
        <label for="" class="label">CONTRASEÑA:</label>
        <center><input name="password" type="password" class="form-control input" id="input_Password"></center>
        <br>
        <button type="submit" class="btn  btn-login id="btn-confirmar"><p class="con">CONFIRMAR</p></button>
        <br>
        <a href="register.php" class="btn btn-login"><p class="con">CREAR MI CUENTA</p></a>

      </form>
    </div>
  </div>
  </form>
  <script src="js/validacion.js" charset="utf-8"></script>
</body>
</html>
