<?php $pageTitle = 'Little Paws'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>

    <?php include_once ('layouts/nav_home.php') ?>

      <div id="home">
        <header class="header_home container"> <!-- comienzo header -->
           <h1> Little Paws </h1>
           <p> No creemos en las distancias, solo en los encuentros.</p>
         </header><!-- fin header -->

        <section class="parrafo">
          <div class="container">
          <p class="auto"><strong>Little Paws</strong>  no es una red social, es un punto de encuentro. Porque si no nos encontramos, nunca vamos a entender la importancia de estar juntos.</p>

          <a class="auto btn btn-green" href="registro.php">Registrarme</a>
          </div>
        </section>

        <section class="cuerpo">
            <p class="auto">Creemos que todos tenemos una misión en este mundo. Nos gusta pensar que la nuestra, es contribuir a que todos seamos un poco mas felices. </p>
        </section>

       <?php include_once ('layouts/footer.php') ?>

      </div>
  </body>
</html>
