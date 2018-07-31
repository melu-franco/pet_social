<?php
  require_once("funciones.php");

  $errorNombre = "";
  $errorApellido = "";
  $errorMail = "";
  $errorCpassword = "";
  $errorPassword = "";
  $errorUsername = "";

  $nombre = "";
  $email = "";
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
        header("location:login.php");exit;
      }
    }

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $username = $_POST["usuario"];

    if (isset($errores["nombre"])) {
      $errorNombre = "error";
    }
    if (isset($errores["email"])) {
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