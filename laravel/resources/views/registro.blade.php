@extends ('app.layout')

@section('content')

    <section class="section--registro flex flex--column__mobile -margin-top">

        <div class="section section--form col half">
            <h2 class="section__title">Registro</h2>
            <p class="section__desc">Ingresá tus datos y creá tu perfil</p>

            <form class="form form--register flex flex--column" action="" method="post" enctype="multipart/form-data">
            
            <div class="form__field flex flex--column">
                <label class="form__label" for=”nombre”>Nombre</label>
                <input id="nombre" class="form__input" type="text" name="nombre" value="">
            </div>

            <div class="form__field flex flex--column">
                <label class="form__label" for=”usuario”>Usuario</label>
                <input id="usuario" class="form__input" type="text" name="usuario" value="">
            </div>

            <div class="form__field flex flex--column">
                <label class="form__label" for=”mail”>Mail</label>
                <input id="mail" class="form__input casillero" type="email" name="mail" value="">
            </div>

            <div class="form__field flex flex--column">
                <label class="form__label" for=”password”>Contraseña</label>
                <input class="form__input" type="password" id="password" name="password" value="">
            </div>

            <div class="form__field flex flex--column">
                <label class="form__label" for="">Foto de Perfil</label>
                <input class="form__input-img" type="file" name="imgPerfil">
            </div>

            <button type="submit" class="btn btn--submit btn--blue">Crear usuario</button>

            </form>

        </div>

        <div class="col half section--bg section--registro__bg"></div>

    </section>

@endsection