<?php
  require 'config/config.php';
  $objUsuario = new Usuario();
  $reg = $objUsuario->listarUsuario();
  include 'includes/header.html';
?>
<style media="screen">
  body{
    background-color: #fffffa;
  }
</style>
<main class="container">
    <h1 class="text-center">Formulario de modificación de usuario</h1>

    <form action="modificarUsuario.php" method="post">
        <input type="hidden" name="id" value="<?php echo $reg['id'] ?>">
        Username: <br>
        <input type="text" name="username" value="<?php echo $reg['username'] ?>" class="form-control" required>
        <br>
        Email: <br>
        <input type="text" name="email" class="form-control" value="<?php echo $reg['email'] ?>" required>
        <br>
        Nombre: <br>
        <input type="text" name="name" class="form-control" value="<?php echo $reg['name'] ?>" required>
        <br>
        Apellido: <br>
        <input type="text" name="lastname" class="form-control" value="<?php echo $reg['lastname'] ?>" required>
        <br>
        <input type="submit" value="Actualizar Cambios" class="btn btn-success mb-3">
        <a href="profile.php" class="btn btn-light mb-3">Volver a mi perfil</a>
    </form>

</main>

<?php
  include 'includes/foot.html';
?>
