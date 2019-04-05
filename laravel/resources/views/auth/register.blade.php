@extends('layouts.app')

@section('content')
<section class="section--registro flex flex--column__mobile -margin-top">

        <div class="section section--form col half">
            <h2 class="section__title">Registro</h2>
            <p class="section__desc">Ingresá tus datos y creá tu perfil</p>

            <form class="form form--register flex flex--column" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf

                <div class="form__field flex flex--column">
                    <label for="name" class="form__label">{{ __('Nombre') }}</label>
                    <input id="name" type="text" class="form__input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form__field flex flex--column">
                    <label for="email" class="form__label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form__input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                    <label for="password-confirm" class="form__label">{{ __('Confirmar contraseña') }}</label>
                    <input id="password-confirm" type="password" class="form__input form-control" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn--submit btn--blue">
                    {{ __('Crear Usuario') }}
                </button>
            </form>
        </div>

        <div class="col half section--bg section--registro__bg"></div>
    </section>
@endsection
