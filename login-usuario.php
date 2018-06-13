<?php
  require_once("funciones.php");

  $errores = [];

  if ($_POST) {

    $usuario = dameUnoPorUsername($_POST['usuario']);

    if(password_verify($_POST['password'], $usuario['password'])){
      session_start();
      header("Location: profile.php");
    }else{
      $errores['password'] = "La contraseña no es valida";
    }


    }
  

 ?>
