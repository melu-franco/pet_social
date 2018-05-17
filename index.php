<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include_once ('layouts/head.html') ?>

  <body>
      <div id="home">

        <nav class="menu flex nav_home">
          <div class="logo">Little Paws</div>
          <ul class="nav_ul flex">
            <li class="nav_li"><a class="active" href="index.html">Home</a></li>
            <li class="nav_li"><a href="faq.html">Faqs</a></li>
            <li class="nav_li"><a href="registro.html">Registro</a></li>
            <li class="nav_li"><a class="btn btn-w-border" href="login.html">Login</a></li>
          </ul>
        </nav>

        <header class="header_home container"> <!-- comienzo header -->
           <h1> Little Paws </h1>
           <p> No creemos en las distancias, solo en los encuentros.</p>
         </header><!-- fin header -->

        <section class="parrafo">
          <div class="container">
          <p class="auto"><strong>Little Paws</strong>  no es una red social, es un punto de encuentro. Porque si no nos encontramos, nunca vamos a entender la importancia de estar juntos.</p>

          <a class="auto btn btn-green" href="registro.html">Registrarme</a>
          </div>
        </section>

        <section class="cuerpo">
            <p class="auto">Creemos que todos tenemos una misión en este mundo. Nos gusta pensar que la nuestra, es contribuir a que todos seamos un poco mas felices. </p>
        </section>

       <?php include_once ('layouts/footer.html') ?>

      </div>
  </body>
</html>
