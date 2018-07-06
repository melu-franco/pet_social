<?php 
$pageTitle = 'Little Paws - Login'; 
$current_section = 'login';

require_once "php-functions/funciones.php";

  $errores = [];

  if ($_POST) {

    $usuario = dameUnoPorUsername($_POST['usuario']);

    if ($usuario !== null) {
      if(password_verify($_POST['password'], $usuario['password'])){
        login($usuario);
      } else {
        $errores['password'] = "La contraseña ingresada no es valida";
      }
    } else {
      $errores['usuario'] = "Debe ingresar un usuario";
    }
  }

  if (controlarLogin()) {
    header('Location: perfil.php');
  }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

      <?php include_once ('layouts/nav.php') ?>

      <section class="section--login -margin-top flex flex--column__mobile">
        
      <div class="section section--form col half">
        <h2 class="section__title">Iniciar sesión</h2>
        <form class="form form--login flex flex--column" action="" method="post" enctype="multipart/form-data">
          
          <div class="form__field flex flex--column">
            <label class="form__label" for=”usuario”>Usuario</label>
            <input id="usuario" class="form__input <?=$errorUsername?>" type="text" name="usuario" value="<?=$username?>">
            <p class="form--error"><?php if (count($errores) > 0) { echo "$errores[usuario]"; } ?></p>
          </div>

          <div class="form__field flex flex--column">
            <label class="form__label" for=”password”>Contraseña</label>
            <input class="form__input <?=$errorPassword?>" type="password" id="password" name="password" value="">
            <p class="form--error"><?php if (count($errores) > 0) { echo "$errores[password]"; } ?></p>
          </div>

          <div class="form__field flex">
            <input class="input__checkbox" type="checkbox" id="recordarme">
            <label for="recordarme"> Recordarme </label>
          </div>

          <button type="submit" class="btn btn--submit btn--blue">Enviar</button>

        </form>

        <a href="registro.php" class="btn t-center -color-secondary">Todavía no tengo usuario</a>
        
      </div>

      <div class="col half section--bg section--login__bg"></div>

      </section>

      <?php include_once ('layouts/footer.php') ?>

</body>
</html>
