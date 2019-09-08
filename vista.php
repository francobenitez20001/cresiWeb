<?php

    require 'config/config.php';
    $objUsuario = new Usuario();
    $users = $objUsuario->listarUsuarios();
    foreach ($users as $user) {
        echo $user['username'] , ':', ' ', $user['email'], '<br>';
    }