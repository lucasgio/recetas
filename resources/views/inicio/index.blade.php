@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
@endsection


@section('hero')
   <div class="hero-categorias">
        <form class="container h-50" action="{{ route('buscar.search') }}" method="GET">
            <div class="row h-100 align-items-center">
                <div class="col-md-4">
                    <p class="texto-buscar text-light text-uppercase">
                        Encuentra una receta para tu proxima comida
                    </p>
                    <input class="form-control" type="search" placeholder="Busca tu sisguinte receta" name="buscar" id="buscar">
                </div>
            </div>    
        </form> 
   </div>    
@endsection

@section('content')


    <div class="container nuevas-recetas">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4 ">Últimas Recetas</h2>
        <div class="owl-carousel owl-theme">
            @foreach ($nuevas as $nueva)
                @include('ui.inicio.ultimas')
            @endforeach
        </div>
    </div>

    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Mas votadas</h2>
        <div class="row">
            @foreach ($votadas as $receta)
                @include('ui.inicio.categoria')
            @endforeach
        </div>
    </div>
@endsection

@section('footer')
<footer class="footer shadow mt-auto py-3 bg-light">
    <div class="container">
         <div class="d-inline-flex p-2 bd-highlight">
             <a class="nav-link text-primary mx-5" href="https://lucasgio.github.io/portafolio/" target="_blank">Desarrollado por Iosvany Alvarez.</a> 
             <a class="nav-link text-primary" href="{{ route('sobre.about') }}" >Sobre Recetas</a>
             <a class="nav-link text-primary" href="{{ route('preguntas.question') }}" > Preguntas y Respuestas</a>
             <a class="nav-link text-primary" href="{{ route('contactos.contact') }}" >Contactos</a>
         </div>
    </div>
  </footer>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection
