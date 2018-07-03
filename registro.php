<?php 
$pageTitle = 'Little Paws - Registro'; 
$current_section = 'registro';
include_once ('php-functions/registro-usuario.php');
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

      <?php include_once ('layouts/nav.php') ?>

      <section class="section--registro flex flex--column__mobile -margin-top">

      <div class="section section--form col half">
        <h2 class="section__title">Registro</h2>
        <p class="section__desc">Ingresá tus datos y creá tu perfil</p>

        <form class="form form--register flex flex--column" action="" method="post" enctype="multipart/form-data">
         
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
            <label class="form__label" for=”mail”>Mail</label>
            <input id="mail" class="form__input casillero <?=$errorMail?>" type="email" name="mail" value="<?=$mail?>">
            <p class="form--error"><?php if (!empty($errores["mail"])) { echo "$errores[mail]"; } ?></p>
          </div>

          <div class="form__field flex flex--column">
            <label class="form__label" for=”password”>Contraseña</label>
            <input class="form__input <?=$errorPassword?>" type="password" id="password" name="password" value="">
            <p class="form--error"><?php if (!empty($errores["password"])) { echo "$errores[password]"; } ?></p>
          </div>

          <div class="form__field flex flex--column">
            <label class="form__label" for="">Foto de Perfil</label>
            <input class="form__input-img" type="file" name="imgPerfil">
            <p class="form--error"><?php if (!empty($errores["imgPerfil"])) { echo "$errores[imgPerfil]"; } ?></p>
          </div>

          <button type="submit" class="btn btn--submit btn--blue">Crear usuario</button>

        </form>

        </div>

        <div class="col half section--bg section--registro__bg"></div>

      </section>

      <?php include_once ('layouts/footer.php') ?>

</body>
</html>
