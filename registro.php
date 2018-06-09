<?php $pageTitle = 'Little Paws - Registro'; ?>
<?php include_once ('registro-usuario.php') ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

      <?php include_once ('layouts/nav.php') ?>
      <?php var_dump($errores); ?>

      <section class="form">
              
        <form class="register" action="" method="post" enctype="multipart/form-data">

          <h2 class="titulo">Registro</h2>
          <p class="bajada">Ingresá tus datos y creá tu perfil</p>

          <label for=”nombre”>Nombre</label>
          <input id="nombre" class="casillero <?=$errorNombre?>" type="text" name="nombre" value="<?=$nombre?>">
          <p class="error"><?php if (count($errores) > 0) { echo "$errores[nombre]"; } ?></p>

          <label for=”usuario”>Usuario</label>
          <input id="usuario" class="casillero <?=$errorUsername?>" type="text" name="usuario" value="<?=$username?>">
          <p class="error"><?php if (count($errores) > 0) { echo "$errores[usuario]"; } ?></p>

          <label for=”mail”>Mail</label>
          <input id="mail" class="casillero <?=$errorMail?>" type="email" name="mail" value="<?=$mail?>">
          <p class="error"><?php if (count($errores) > 0) { echo "$errores[mail]"; } ?></p>

          <label for=”password”>Contraseña</label>
          <input class="casillero <?=$errorPassword?>" type="password" id="password" name="password" value="">

          <label for="">Foto de Perfil</label>
          <input type="file" name="imgPerfil">
          
          <button type="submit" class="btn btn-blue">Crear usuario</button>

        </form>

        <div class="bg-registro">
        </div>

      </section>

      <?php include_once ('layouts/footer.php') ?>

</body>
</html>
