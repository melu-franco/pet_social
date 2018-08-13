@extends('layouts.app')

@section('content')
<section class="section--login -margin-top flex flex--column__mobile">

        <div class="section section--form col half">
          
        <h2 class="section__title">Iniciar sesión</h2>
    
            <form class="form form--login flex flex--column" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
    
                <div class="form__field flex flex--column">
                    <label for="email" class="form__label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form__input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
    
                <div class="form__field flex flex--column">
                    <label for="password" class="form__label">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="form__input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
    
                <div class="form__field flex flex--column">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordame') }}
                        </label>
                    </div>
                </div>
    
                <div class="form__field flex flex--column">
                    <button type="submit" class="btn btn--submit btn--blue">
                        {{ __('Login') }}
                    </button>
    
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                </div>
            </form>
    
        </div>

        <div class="col half section--bg section--login__bg"></div>
    </section>
@endsection
