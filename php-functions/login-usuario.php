<?php
  require_once "funciones.php";

  $username = "";

  function login($usuario) {
    $_SESSION["email"] = $usuario["email"];
    setcookie("email", $usuario["email"], time()+3600);
  }

  function controlarLogin() {
      if (isset($_SESSION["email"])) {
          return true;
      } else {
          if (isset($_COOKIE["email"])) {
              $_SESSION["email"] = $_COOKIE["email"];
              return true;
          } else {
              return false;
          }
      }
  }

  function logout() {
      session_destroy();
      setcookie("email", "", -1);
  }
  

 ?>
