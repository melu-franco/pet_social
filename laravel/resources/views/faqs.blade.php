@extends ('app.layout')

@section('content')

<div id="faqs">
  
    <header class="header header--faqs flex flex--column flex--align-center flex--justify-center container -margin-top">
        <h1 class="header__title header__title--smaller -color-white t-center">FAQs</h1>
        <p class="header__desc -color-white t-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
    </header>

    <section class="section section--faqs container">
        <div class="dropdown">
            <input type="checkbox" id="question-1">
            <label class="dropdown__question -color-secondary" for="question-1">¿Cómo me armo un usuario?</label>
            <div class="dropdown__answer answer">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div><!-- text -->
        </div><!-- dropdown -->
        <div class="dropdown">
            <input type="checkbox" id="question-2">
            <label class="dropdown__question -color-secondary" for="question-2">¿Cómo sumar mas de una mascota?</label>
            <div class="dropdown__answer answer">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div><!-- text -->
        </div><!-- dropdown -->
        <div class="dropdown">
            <input type="checkbox" id="question-3">
            <label class="dropdown__question -color-secondary" for="question-3">¿Para qué me sirve la plataforma?</label>
            <div class="dropdown__answer answer">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div><!-- text -->
        </div><!-- dropdown -->
        <div class="dropdown">
            <input type="checkbox" id="question-4">
            <label class="dropdown__question -color-secondary" for="question-4">¿Cómo comparto una publicación?</label>
            <div class="dropdown__answer answer">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div><!-- text -->
        </div><!-- dropdown -->
        <div class="dropdown">
            <input type="checkbox" id="question-5">
            <label class="dropdown__question -color-secondary" for="question-5">¿Dónde veo los animales perdidos?</label>
            <div class="dropdown__answer answer">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div><!-- text -->
        </div><!-- dropdown -->
        <div class="dropdown">
            <input type="checkbox" id="question-6">
            <label class="dropdown__question -color-secondary" for="question-6">¿Puedo cargar todo tipo de mascotas?</label>
            <div class="dropdown__answer answer">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div><!-- text -->
        </div><!-- dropdown -->
        <div class="dropdown">
            <input type="checkbox" id="question-7">
            <label class="dropdown__question -color-secondary" for="question-7">¿Cómo me puedo contactar con otra mascota?</label>
            <div class="dropdown__answer answer">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div><!-- text -->
        </div><!-- dropdown -->
        <div class="dropdown">
            <input type="checkbox" id="question-8">
            <label class="dropdown__question -color-secondary" for="question-8">¿Cómo busco nuevas mascotas?</label>
            <div class="dropdown__answer answer">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div><!-- text -->
        </div><!-- dropdown -->

    </section>

    </div>

@endsection