<?php
function validarInformacion($datos) {

  foreach ($datos as $key => $value) {
    $datos[$key] = trim($value);
  }

  $errores = [];

  if (empty($datos["nombre"])) {
    $errores["nombre"] = "Debe ingresar un nombre";
  }

  if (empty($datos["mail"])) {
    $errores["mail"] = "Debe ingresar un mail";
  }
  else if (!filter_var($datos["mail"], FILTER_VALIDATE_EMAIL) ) {
    $errores["mail"] = "El mail ingresado no es válido";
  }
  else if (dameUnoPorMail($datos["mail"]) != NULL) {
    $errores["mail"] = "El mail ingresado ya existe";
  }

  if (strlen($datos["password"]) < 8) {
    $errores["password"] = "La contraseña debe tener al menos 8 caracteres";
  } 

  if (empty($datos["usuario"])) {
    $errores["usuario"] = "Debe ingresar un nombre de usuario";
  }

  return $errores;
}

function crearUsuario($datos) {
  $usuario = [
    "nombre" => $datos["nombre"],
    "mail" => $datos["mail"],
    "usuario" => $datos["usuario"],
    "password" => password_hash($datos["password"], PASSWORD_DEFAULT),
    "id" => traerNuevoID()
  ];

  return $usuario;
}

function guardarUsuario($usuario) {
	
  $json = json_encode($usuario);
	//var_dump($json);exit();
  file_put_contents("usuarios.json", $json . PHP_EOL, FILE_APPEND);
}

function dameTodos() {
  $contenido = file_get_contents("usuarios.json");

  $usuariosJSON = explode(PHP_EOL, $contenido);

  array_pop($usuariosJSON);

  $usuariosFinal = [];

  foreach ($usuariosJSON as $usuario) {
    $usuariosFinal[] = json_decode($usuario, true);
  }

  return $usuariosFinal;
}

function dameUnoPorMail($mail) {
  $todos = dameTodos();

  foreach ($todos as $usuario) {
    if ($usuario["mail"] == $mail) {
      return $usuario;
    }
  }

  return NULL;
}

function dameUnoPorUsername($username){
  $todos = dameTodos();

  foreach ($todos as $usuario) {
    if ($usuario["usuario"] == $username){
      return $usuario;
    }
  }

  return null;
}

function dameUnoPorId($id) {
  $todos = dameTodos();

  foreach ($todos as $usuario) {
    if ($usuario["id"] == $id) {
      return $usuario;
    }
  }

  return NULL;
}

function traerNuevoID() {
  $todos = dameTodos();

  if (count($todos) == 0) {
    return 1;
  }

  $elUltimo = array_pop($todos);

  return $elUltimo["id"] + 1;
}

function guardarImagen($usuario) {

  $errores = [];
  $id = $usuario["id"];

	if ($_FILES["imgPerfil"]["error"] == UPLOAD_ERR_OK)
	{
		$nombre=$_FILES["imgPerfil"]["name"];
		$archivo=$_FILES["imgPerfil"]["tmp_name"];

		$ext = pathinfo($nombre, PATHINFO_EXTENSION);

    if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
      $errores["imgPerfil"] = "Solo acepto formatos jpg y png";
      return $errores;
    }

		$miArchivo = dirname(__FILE__);

		$miArchivo = $miArchivo . "/uploads/";

    $miArchivo = $miArchivo. "perfil" . $id . "." . $ext;

		move_uploaded_file($archivo, $miArchivo);
	} else {
    $errores["imgPerfil"] = "Hubo un error al procesar el archivo";
  }

  return $errores;
}


?>
