<?php
$pageTitle = 'Little Paws - Perfil';

  include("../loader.php");
  include("../classes/Post.php");
  
  if (!$auth->loginControl()) 
  {
     header("Location: ../login.php");
     exit;
  }
  
  $userLogged = $auth->userLogged($db);
  $username = $userLogged->getUsername();
  $fullname = $userLogged->getFullName();
  $userid = $userLogged->getId();

  $errores = [];

  if ($_POST) {
    $errores = $validator->validatePosts($_POST);
    if (count($errores) == 0) {
      $post = new Post($userid, $_POST["post-content"], $created_at);
      $post = $db->savePost($post);
    }
  }
  
?>

<!doctype html>
<html lang="en">

<?php include_once ('layouts/head.php') ?>

  <body class="dashboard">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <?php if ($auth->loginControl()) : ?>

  <?php include_once ('layouts/nav.php') ?>

  <?php include_once ('layouts/header.php') ?>

<div class="container">
  <section class="section section--new-post">
    <p>¿Qué estás pensando?</p>
      <form action="" method="post" class="form form--create-post">
          <textarea class="form__input" name="post-content" id="" cols="30" rows="10"></textarea>
          <button type="submit" class="btn btn--submit btn--green">Publicar</button>
      </form>
  </section>

  <section class="section section--posts">
  <?php 
    $posts = $db->fetchPosts();
    foreach ($posts as $post) {
?>
      <article class="post">
        <p class="post__text"><?= nl2br($post->getContent()) ?></p>
        <p class="post__info">Publicado por <a href="#" class="-color-secondary"><?= $post->getUser_id() ?></a> el <?=$post->getCreated_at()?></p>
        <div class="post__interaction">
          <?php if($post->getUser_id() ==  $userid) { ?>
            <a href="#">Editar</a>
            <a href="#">Eliminar</a>
          <?php } else { ?>
            <a href="#">Lick</a>
            <?php } ?>
        </div>
      </article>
      <?php
    } ?>
  </section>
  </div>

<?php endif; ?>


    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script>

      $( ".profileddtrigger" ).click(function() {
        $( ".profiledd" ).toggleClass( "active" );
      });

    </script>
    
  </body>
</html>
