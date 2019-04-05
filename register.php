<?php

	include_once("loader.php");
  require_once("classes/User.php");

	//como solamente registro con email, creo variable vacia para llamarla en el Value del campo email del form
	$emailDefault = "";

	$errores = [];

	if ($_POST) {
		//Lleno el array de errores como antes, pero usando la instancia del objeto Validator
		$errores = $validator->validarInformacion($_POST, $db);


		if (!isset($errores["email"])) {
			//si no hay errores en el mail, lo guardo para el caso que la pass este mal, asi lo mantengo en el form y el usuario no tiene que ponerlo de nuevo
			$emailDefault = $_POST["email"];
		}

		if (count($errores) == 0) {
			//Si count() de $errores = 0, creo mi nueva instancia de usuario
			$usuario = new Usuario($_POST["email"], $_POST["password"]);
			//Como en ESTE caso mi clase usuario tiene tambien la responsabilidad de guardar su imagen, la guardamos
			$usuario->guardarImagen($usuario->getEmail());
			//Aca guardamos el user en nuestra base de datos
			$usuario = $db->guardarUsuario($usuario);
			//Lo pasamos por auth para derivarlo al perfil
			$auth->login($_POST["email"]);
			header("Location: perfil.php");
			exit;

		}
	}

	//Aca, si hay sesion iniciada, no tiene por que ver el registro, asi que se deriva al perfil directamente en caso de que quiera ingresar a registro.php
	if ($auth->loginControl()) {
		header("Location:perfil.php");
		exit;
	}

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/master.css">
		<title>Demo Registro</title>
	</head>
		<body>
			<main class="flex-container">
			<header>
				<h1> Registrate </h1>
			</header>
			<form class="formulario" action="registro.php" method="post" enctype="multipart/form-data">
					<label>E-mail</label>
					<input type="text" name="email" value="<?=$emailDefault?>">
					<label for="">Foto de Perfil</label>
					<input type="file" name="avatar">
					<label>Password</label>
					<input type="password" name="password">
					<label>Confirmar password</label>
					<input type="password" name="cpassword"> 
					<input type="submit" class="btn-registro" value="Registrarme">
			</form>
			<a href="login.php">Si ya tenes cuenta logueate aca</a>
		</main>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
