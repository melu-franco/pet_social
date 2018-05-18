<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

      <?php include_once ('layouts/nav.php') ?>


      <section class="form margin-top">

        <form class="login" action=”” method=”post”>
          <h2 class="titulo">Iniciar sesión</h2>
          <label for=”usuario”>Usuario</label>
          <br>
          <input id="usuario" class="casillero" type="text" name="usuario" placeholder="Mail o User" required>
          <br>

          <label for=”password”>Contraseña</label>
          <br>
          <input class="casillero" type="password" id="password" name="contrasena" required>
          <br>

          <input type="checkbox" id="recordarme"> <label for="recordarme"> Recordarme </label>
          <br>

          <button type="submit">Enviar</button>
          <h2 class="recordar">>>Olvidé mi contraseña</h2>

        </form>

        <div class="acompaña">

        </div>

      <!-- <div class="img"></div> -->

      </section>

      <?php include_once ('layouts/footer.php') ?>

</body>
</html>
