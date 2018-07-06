<nav class="nav {{Request::is('/') ? 'nav--home' : 'nav--main'}} flex flex--align-center -auto">
    <a href="{{url('/')}}" class="nav__logo">Little Paws</a>
    <ul class="nav__menu flex flex--space-between flex--align-center">
        <li><a class="nav__link {{Request::is('/faqs') ? 'active' : ''}}" href="{{url('/faqs')}}">Faqs</a></li>
        <li><a class="nav__link {{Request::is('/registro') ? 'active' : ''}}" href="{{url('/registro')}}">Registro</a></li>
        <li><a class="nav__link btn {{Request::is('/') ? 'btn--border white' : 'btn--green'}}" href="{{url('/login')}}">Login</a></li>
    </ul>
</nav>
