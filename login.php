<?php $pageTitle = 'Little Paws - Login'; ?>
<?php include_once ('login-usuario.php') ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

      <?php include_once ('layouts/nav.php') ?>
      <?php var_dump($errores); ?>


      <section class="form margin-top">

        <form class="login" action="" method="post" enctype="multipart/form-data">
          <h2 class="titulo">Iniciar sesión</h2>

          <label for=”usuario”>Usuario</label>
          <input id="usuario" class="casillero <?=$errorUsername?>" type="text" name="usuario" value="<?=$username?>">
          <p class="error"><?php if (count($errores) > 0) { echo "$errores[usuario]"; } ?></p>

          <label for=”password”>Contraseña</label>
          <input class="casillero <?=$errorPassword?>" type="password" id="password" name="password" value="">

          <input type="checkbox" id="recordarme">
          <label for="recordarme"> Recordarme </label>

          <button type="submit" class="btn btn-blue">Enviar</button>

          <a href="" class="recordar">>>Olvidé mi contraseña</a>

        </form>

        <div class="bg-login"></div>

      <!-- <div class="img"></div> -->

      </section>

      <?php include_once ('layouts/footer.php') ?>

</body>
</html>
