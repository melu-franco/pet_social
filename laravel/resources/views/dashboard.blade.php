@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="container">
                      <section class="section section--new-post">
                        <p>¿Qué estás pensando?</p>
                          <form action="dashboard" method="post" class="form form--create-post">
                              <textarea class="form__input" name="postContent" id="" cols="30" rows="10"></textarea>
                              <button type="submit" class="btn btn--submit btn--green">Publicar</button>
                              <input type="hidden" value="{{ Session::token() }}" name="_token">
                          </form>
                      </section>

                      <section class="section section--posts">

                          <article class="post">
                            <p class="post__text">Lorem ipsun ponele que esto es un posteo</p>
                            <p class="post__info">Publicado por <a href="#" class="-color-secondary"></a> el La Fecha</p>
                            <div class="post__interaction">

                                <a href="#">Editar</a>
                                <a href="#">Eliminar</a>
                                <a href="#">Lick</a>
                            </div>
                          </article>

                          <article class="post">
                            <p class="post__text">Lorem ipsun ponele que esto es un posteo</p>
                            <p class="post__info">Publicado por <a href="#" class="-color-secondary"></a> el La Fecha</p>

                            <div class="post__interaction">
                                <a href="#">Editar</a>
                                <a href="#">Eliminar</a>
                                <a href="#">Lick</a>
                            </div>
                          </article>

                      </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
