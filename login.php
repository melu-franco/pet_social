<?php $pageTitle = 'Little Paws - Login'; ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

      <?php include_once ('layouts/nav.php') ?>


      <section class="form margin-top">

        <form class="login" action=”” method=”post”>
          <h2 class="titulo">Iniciar sesión</h2>

          <label for=”usuario”>Usuario</label>
          <input id="usuario" class="casillero" type="text" name="usuario" placeholder="Mail o User" required>

          <label for=”password”>Contraseña</label>
          <input class="casillero" type="password" id="password" name="contrasena" required>

          <input type="checkbox" id="recordarme"> 
          <label for="recordarme"> Recordarme </label>

          <button type="submit" class="btn btn-blue">Enviar</button>
          
          <a href="" class="recordar">>>Olvidé mi contraseña</a>

        </form>

        <div class="acompaña">

        </div>

      <!-- <div class="img"></div> -->

      </section>

      <?php include_once ('layouts/footer.php') ?>

</body>
</html>
