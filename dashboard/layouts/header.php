<div class="new-wrapper">
      <header class="dashboard--header -color-white flex flex--align-center flex--space-between">
          <h1 class="title dashboard--header__title"> Hola <?=$fullname ?>! </h1>
          <!--<a class="-color-white" href="logout.php">Logout</a>-->

          <!-- dropdown profile menu -->
          <a href="#0" class="profileddtrigger"><img src="https://static.boredpanda.com/blog/wp-content/uploads/2017/09/funny-dog-thoughts-tweets-1.jpg" /></a>
      </header>

      <!-- dropdown profile menu -->
      <div class="ddcontainer profiledd">
        <a href="#0" class="ddheader">
          <img src="https://static.boredpanda.com/blog/wp-content/uploads/2017/09/funny-dog-thoughts-tweets-1.jpg" />
          <h5 class="ddname"><?=$fullname ?></h5>
          <p class="ddtype">Dog</p>
        </a>
        <nav class="ddnav">
          <a href="#0"><span class="material-icons">settings</span><span>Configuración</span></a>
          <a href="../logout.php"><span class="material-icons">exit_to_app</span><span>Logout</span></a>
        </nav>
      </div>

  </div>