<?php 
$pageTitle = 'Little Paws'; 
$current_section = 'home';
require_once "php-functions/funciones.php";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

    <?php include_once ('layouts/nav.php') ?>

      <div id="home" class="home">

        <header class="header header--home flex flex--column flex--align-center flex--justify-center container"> 
           <h1 class="header__title -color-white t-center">Little Paws</h1>
           <p class="header__desc -color-white t-center"> No creemos en las distancias, solo en los encuentros.</p>
         </header>

        <section class="section section--desc container t-center">
          <p class="section__text -auto"><strong>Little Paws</strong>  no es una red social, es un punto de encuentro. Porque si no nos encontramos, nunca vamos a entender la importancia de estar juntos.</p>
          <a class="-auto btn btn--green" href="registro.php">Registrarme</a>
        </section>

        <section class="section section--info t-center bg-home--info container" >
            <p class="section__text -color-white -auto">Creemos que todos tenemos una misión en este mundo. Nos gusta pensar que la nuestra, es contribuir a que todos seamos un poco mas felices. </p>
        </section>

        <section class="section section--cta -bg-primary flex flex--align-center flex--space-between container">
          <p class="section__text -color-white">Creá tu perfil gratis ahora!</p>
          <a href="registro.php" class="btn btn--white">Unirme</a>
        </section>

       <?php include_once ('layouts/footer.php') ?>

      </div>
  </body>
</html>
