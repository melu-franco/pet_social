<?php $pageTitle = 'Little Paws'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.php') ?>

  <body>
      <div id="home">

        <nav class="menu flex nav_home">
          <a href="index.php" class="logo">Little Paws</a>
          <ul class="nav_ul flex">
            <li class="nav_li"><a class="active" href="index.php">Home</a></li>
            <li class="nav_li"><a href="faq.php">Faqs</a></li>
            <li class="nav_li"><a href="registro.php">Registro</a></li>
            <li class="nav_li"><a class="btn btn-w-border" href="login.php">Login</a></li>
          </ul>
        </nav>

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
