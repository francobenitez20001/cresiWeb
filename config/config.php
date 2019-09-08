<?php
session_start();

function autocarga($clase)
{
    if (!isset($_SESSION['loginCresi'])){
        header('location: login.php?error=2');
    }
    require_once 'classes/'.$clase.'.php';
}

spl_autoload_register('autocarga');
