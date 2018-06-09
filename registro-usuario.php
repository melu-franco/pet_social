<?php
  require_once("funciones.php");

  $errorNombre = "";
  $errorApellido = "";
  $errorMail = "";
  $errorPassword = "";
  $errorUsername = "";

  $nombre = "";
  $mail = "";
  $username = "";

  $errores = [];
  
  if ($_POST) {
	  
    $errores = validarInformacion($_POST);
    if (count($errores) == 0) {
      $usuario = crearUsuario($_POST);

      $erroresDeImagen = guardarImagen($usuario);

      $errores = array_merge($errores, $erroresDeImagen);
      if (count($errores) == 0) {
        guardarUsuario($usuario);
        header("location:profile.php");exit;
      }
    }

    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $username = $_POST["usuario"];

    if (isset($errores["nombre"])) {
      $errorNombre = "error";
    }
    if (isset($errores["mail"])) {
      $errorMail = "error";
    }
    if (isset($errores["password"])) {
      $errorPassword = "error";
    }
    if (isset($errores["usuario"])) {
      $errorUsername = "error";
    }
  }
  
 ?>