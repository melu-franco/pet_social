<?php $pageTitle = 'Little Paws - Registro'; ?>
<?php include_once ('registro-usuario.php') ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

      <?php include_once ('layouts/nav.php') ?>

      <section class="form">

        <?php if (count($errores) > 0) : ?>
          <ul style="color:red;">
            <?php foreach($errores as $error) : ?>
              <li>
                <?=$error?>
              </li>
            <?php endforeach; ?>
          </ul>
          
        <?php endif; ?>
        
        <form class="register" action="" method="post" enctype="multipart/form-data">

          <h2 class="titulo">Registro</h2>
          <p class="bajada">Ingresá tus datos y creá tu perfil</p>

          <label for=”nombre”>Nombre</label>
          <input id="nombre" class="casillero <?=$errorNombre?>" type="text" name="nombre" value="<?=$nombre?>">

          <label for=”usuario”>Usuario</label>
          <input id="usuario" class="casillero <?=$errorUsername?>" type="text" name="usuario" value="<?=$username?>">

          <label for=”mail”>Mail</label>
          <input id="mail" class="casillero <?=$errorMail?>" type="email" name="mail" value="<?=$mail?>">

          <label for=”password”>Contraseña</label>
          <input class="casillero <?=$errorPassword?>" type="password" id="password" name="password" value="">

          <label for="">Foto de Perfil</label>
          <input type="file" name="imgPerfil">
          
          <button type="submit" class="btn btn-blue">Crear usuario</button>

        </form>

        <div class="acompaña">
        </div>

      </section>

      <?php include_once ('layouts/footer.php') ?>

</body>
</html>
