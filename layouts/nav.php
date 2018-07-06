<nav class="nav <?=$current_section=='home'?'nav--home':'nav--main'?> flex flex--align-center -auto">
  <a href="index.php" class="nav__logo">Little Paws</a>
  <ul class="nav__menu flex flex--space-between flex--align-center">
    <li><a class="nav__link <?=$current_section=='faqs'?'active':''?>" href="faqs.php">Faqs</a></li>
    <li><a class="nav__link <?=$current_section=='registro'?'active':''?>" href="registro.php">Registro</a></li>
    <li> <?php if (controlarLogin()) { ?>
          <a class="nav__link btn <?=$current_section=='home'?'btn--border white':'btn--green'?>" href="logout.php">Logout</a>
          <?php } else { ?>
            <a class="nav__link btn <?=$current_section=='home'?'btn--border white':'btn--green'?>" href="login.php">Login</a>
         <?php } ?>
    </li>
  </ul>
</nav>
