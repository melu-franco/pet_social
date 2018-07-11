@extends ('app.layout')

@section('title', 'Little Paws - Login')

@section('content')

<section class="section--login -margin-top flex flex--column__mobile">
        
        <div class="section section--form col half">
          <h2 class="section__title">Iniciar sesión</h2>
          <form class="form form--login flex flex--column" action="" method="post" enctype="multipart/form-data">
            
            <div class="form__field flex flex--column">
              <label class="form__label" for=”usuario”>Usuario</label>
              <input id="usuario" class="form__input" type="text" name="usuario" value="">
            </div>
  
            <div class="form__field flex flex--column">
              <label class="form__label" for=”password”>Contraseña</label>
              <input class="form__input" type="password" id="password" name="password" value="">
            </div>
  
            <div class="form__field flex">
              <input class="input__checkbox" type="checkbox" id="recordarme">
              <label for="recordarme"> Recordarme </label>
            </div>
  
            <button type="submit" class="btn btn--submit btn--blue">Enviar</button>
  
          </form>
  
          <a href="registro" class="btn t-center -color-secondary">Todavía no tengo usuario</a>
          
        </div>
  
        <div class="col half section--bg section--login__bg"></div>
  
        </section>

@endsection