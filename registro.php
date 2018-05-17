<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.html') ?>

  <body>

      <?php include_once ('layouts/nav.html') ?>

      <section class="form">
        <form class="register" action=”” method=”post”>

          <h2 class="titulo">Registro</h2>
          <p class="bajada">Ingresá tus datos y creá tu perfil</p>

          <label for=”usuario”>Usuario</label>
          <br>
          <input id="usuario" class="casillero" type="text" name="usuario" required>
          <br>
          <label for=”nombre”>Nombre y Apellido</label>
          <br>
          <input id="nombre" class="casillero" type="text" name="nombre" required>
          <br>
          <label for=”mail”>Mail</label>
          <br>
          <input id="mail" class="casillero" type="email" name="mail" required>
          <br>
          <label for=”password”>Contraseña</label>
          <br>
          <input class="casillero" type="password" id="password" name="contrasena" required>
          <br>
          <button type="submit">Crear usuario</button>
        </form>

        <div class="acompaña">
        </div>

      </section>

      <?php include_once ('layouts/footer.html') ?>

</body>
</html>
