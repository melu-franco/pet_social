<?php 
  $pageTitle = 'Little Paws - Registro'; 
  $current_section = 'registro';

  include_once("loader.php");
	require_once("classes/User.php");

	$emailDefault = "";

  $errores = [];
  
  $nombre = "";
  $email = "";
  $username = "";

	if ($_POST) {
		$errores = $validator->validateRegister($_POST, $db);

		if (!isset($errores["email"])) {
			$emailDefault = $_POST["email"];
		}

		if (count($errores) == 0) {
			$usuario = new User(null, $_POST["nombre"],$_POST["usuario"], $_POST["email"], $_POST["password"]);
			$usuario = $db->saveUser($usuario);
			$auth->login($_POST["usuario"]);
			header("Location: login.php");
			exit;
    }
    
    $errorNombre = "";
    $errorApellido = "";
    $errorEmail = "";
    $errorCpassword = "";
    $errorPassword = "";
    $errorUsername = "";

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $username = $_POST["usuario"];

    if (isset($errores["nombre"])) {
      $errorNombre = "error";
    }
    if (isset($errores["email"])) {
      $errorEmail = "error";
    }
    if (isset($errores["password"])) {
      $errorPassword = "error";
    }
    if (isset($errores["cpassword"])) {
      $errorCpassword = "error";
    }
    if (isset($errores["usuario"])) {
      $errorUsername = "error";
    }
  }
  
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <!-- Styles -->
  <link href= "assets/css/reset.css" rel="stylesheet">
  <link href= "assets/css/styles.css" rel="stylesheet">
</head>


  <body>

     <nav class="nav <?=$current_section=='home'?'nav--home':'nav--main'?> flex flex--align-center -auto">
      <a href="index.php" class="nav__logo">Little Paws</a>
      <ul class="nav__menu flex flex--space-between flex--align-center">
        <li><a class="nav__link <?=$current_section=='faqs'?'active':''?>" href="faqs.php">Faqs</a></li>
        <li><a class="nav__link <?=$current_section=='registro'?'active':''?>" href="registro.php">Registro</a></li>
        <li> <a class="nav__link btn <?=$current_section=='home'?'btn--border white':'btn--green'?>" href="login.php">Login</a>
        </li>
      </ul>
    </nav>

      <section class="section--registro flex flex--column__mobile -margin-top">

      <div class="section section--form col half">
        <h2 class="section__title">Registro</h2>
        <p class="section__desc">Ingresá tus datos y creá tu perfil</p>

        <form class="form form--register flex flex--column" action="registro.php" method="post" enctype="multipart/form-data">
         
          <div class="form__field flex flex--column">
            <label class="form__label" for=”nombre”>Nombre</label>
            <input id="nombre" class="form__input <?=$errorNombre?>" type="text" name="nombre" value="<?=$nombre?>">
            <p class="form--error"><?php if (!empty($errores["nombre"])){ echo "$errores[nombre]"; } ?></p>
          </div>

          <div class="form__field flex flex--column">
            <label class="form__label" for=”usuario”>Usuario</label>
            <input id="usuario" class="form__input <?=$errorUsername?>" type="text" name="usuario" value="<?=$username?>">
            <p class="form--error"><?php if (!empty($errores["usuario"])) { echo "$errores[usuario]"; } ?></p>
          </div>

          <div class="form__field flex flex--column">
            <label class="form__label" for=”email”>Email</label>
            <input id="email" class="form__input <?=$errorEmail?>" type="email" name="email" value="<?=$email?>">
            <p class="form--error"><?php if (!empty($errores["email"])) { echo "$errores[email]"; } ?></p>
          </div>

          <div class="form__field flex flex--column">
            <label class="form__label" for=”password”>Contraseña</label>
            <input class="form__input <?=$errorPassword?>" type="password" id="password" name="password" value="">
            <p class="form--error"><?php if (!empty($errores["password"])) { echo "$errores[password]"; } ?></p>
          </div>

          <div class="form__field flex flex--column">
            <label class="form__label" for=”cpassword”>Confirmar contraseña</label>
            <input class="form__input <?=$errorCpassword?>" type="password" id="cpassword" name="cpassword" value=""> 
            <p class="form--error"><?php if (!empty($errores["cpassword"])) { echo "$errores[cpassword]"; } ?></p>
          </div>

          <!--
          <div class="form__field flex flex--column">
            <label class="form__label" for="">Foto de Perfil</label>
            <input class="form__input-img" type="file" name="avatar">
            <p class="form--error"><?php if (!empty($errores["imgPerfil"])) { echo "$errores[imgPerfil]"; } ?></p>
          </div>
          -->

          <button type="submit" class="btn btn--submit btn--blue">Crear usuario</button>

        </form>

        </div>

        <div class="col half section--bg section--registro__bg"></div>

      </section>

      <?php include_once ('layouts/footer.php') ?>

</body>
</html>
