<?php
  require_once 'php-functions/funciones.php';
  if (!(controlarLogin())) { 
    header('Location:login.php');exit;
  }
?>

<!doctype html>
<html lang="en">

<?php include_once ('layouts/head.php') ?>

  <body class="dashboard">
  <?php if (controlarLogin()) : ?>

  <?php include_once ('layouts/nav_dashboard.php') ?>

  <div class="new-wrapper">
      <header class="dashboard--header t-center -bg-primary -color-white">

          <h1 class="title dashboard--header__title"> Bienvenido <?php echo $_SESSION["usuario"]; ?> </h1>
          <a class="-color-white" href="logout.php">Logout</a>
          
      </header>

  </div>
<?php endif; ?>

    
  </body>
</html>
