<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CrESI APP</title>
  <link rel="shortcut icon" href="img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <script src="js/sweetalert2.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .header{
      background-color: #336699;
      width: 100%;
    }

    body{
      margin-bottom: 0px;
    }
    .form{
      padding: 50px;
      text-align: center;
    }

    .label{
      font-size: 20px;
      font-weight: bold;
      color: #fff;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .input{
      background-color: #b6b6b6;
      width: 250px;
    }

    .btn-confirmar{
      background-color: #fff;
      margin: 10px;
      color: #9932cc;
      text-align: center;
    }
    .con{
      font-weight: bold;
      margin: 0;
      padding: 0;
    }


  </style>
</head>
<body>
<?php if (isset($_GET['error']) && $_GET['error']=='duplicate') {?>

<script type="text/javascript">
  Swal.fire({
    type: 'error',
    title: 'Error',
    text: 'El usuario ya existe',
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
        <form action="registerUser.php" class="form-group" method="POST">
          <label for="" class="label">USUARIO</label>
          <center><input type="text" name="username" class="form-control input" id="input_User"></center>
          <label for="" class="label">EMAIL</label>
          <center><input type="email" name="email" class="form-control input" id="input_Email"></center>
          <label for="" class="label">CONTRASEÑA</label>
          <center><input type="password" name="password" class="form-control input" id="input_Password"></center>
          <label for="" class="label">Nombre</label>
          <center><input type="text" name="name" class="form-control input" id="input_Password"></center>
          <label for="" class="label">Apellido</label>
          <center><input type="text" name="lastname" class="form-control input" id="input_Password"></center>
          <br>
          <center><button type="submit" class="btn btn-confirmar" id="btn-confirmar"><p class="con">CONFIRMAR</p></button></center>
        </form>
      </div>

      <a class="btn btn-confirmar" href="login.php"><p class="con">Ya estoy registrado</p></a>
    </div>
    </form>
<script src="js/validacion.js" charset="utf-8"></script>
</body>
</html>
