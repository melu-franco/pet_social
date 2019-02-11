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
                          @foreach($posts as $post)
                          <article class="post">
                            <p class="post__text">{{ $post->postContent}}</p>
                            <p class="post__info">Publicado por {{ $post->user->name }} <a href="#" class="-color-secondary">{{ $post->created_at }}
                            <div class="post__interaction">
                                <a href="#">Lick</a>
                                @if(Auth::user() == $post->user)
                                <a href="#">Editar</a>
                                <a href="{{ route('post.delete', ['post_id'=>$post->id]) }}">Eliminar</a>
                                @endif


                            </div>
                          </article>
                          @endforeach

                      </section>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Post</h4>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <label for="post-body">Edit the Post</label>
                          <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@endsection
