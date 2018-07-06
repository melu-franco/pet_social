<nav class="nav {{Request::is('/') ? 'nav--home' : 'nav--main'}} flex flex--align-center -auto">
    <a href="/" class="nav__logo">Little Paws</a>
    <ul class="nav__menu flex flex--space-between flex--align-center">
        <li><a class="nav__link {{Request::is('/faqs') ? 'active' : ''}}" href="faqs">Faqs</a></li>
        <li><a class="nav__link {{Request::is('/registro') ? 'active' : ''}}" href="registro">Registro</a></li>
        <li><a class="nav__link btn {{Request::is('/') ? 'btn--border white' : 'btn--green'}}" href="login">Login</a></li>
    </ul>
</nav>
