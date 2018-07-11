@extends ('app.layout')

@section('title', 'Little Paws')

@section('content')

<div id="home" class="home">

    <header class="header header--home flex flex--column flex--align-center flex--justify-center container"> 
        <h1 class="header__title -color-white t-center">Little Paws</h1>
        <p class="header__desc -color-white t-center"> No creemos en las distancias, solo en los encuentros.</p>
    </header>

    <section class="section section--desc container t-center">
        <p class="section__text -auto"><strong>Little Paws</strong>  no es una red social, es un punto de encuentro. Porque si no nos encontramos, nunca vamos a entender la importancia de estar juntos.</p>
        <a class="-auto btn btn--green max-width" href="registro">Registrarme</a>
    </section>

    <section class="section section--info t-center bg-home--info container" >
        <p class="section__text -color-white -auto">Creemos que todos tenemos una misión en este mundo. Nos gusta pensar que la nuestra, es contribuir a que todos seamos un poco mas felices. </p>
    </section>

    <section class="section section--cta -bg-primary flex flex--align-center flex--space-between container">
        <p class="section__text -color-white">Creá tu perfil gratis ahora!</p>
        <a href="registro" class="btn btn--white">Unirme</a>
    </section>

</div>

@endsection