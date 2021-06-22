@extends('layouts.app')

@section('content')

@section('botones')
 @include('custom.botonback')
@endsection



<div class="container">
    <article class="contenido-receta">
        <h3 class="text-center text-primary mt-5 mb-5">{{ $receta->nombreReceta }}</h3>
        <div class="imagen-receta">
            <img src="/storage/{{ $receta->imagen }}" alt="Imagen de una receta" class="w-100">
        </div>

        <div class="receta-meta mt-3">
            <p>
                <span class="font-weight-bold text-primary">Categoria:</span>
                {{ $receta->categoria->categoria }}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Creada por:</span>
                {{ $receta->author->name }}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Creado:</span>
                @php
                    $fecha = $receta->created_at;
                @endphp
                <fecha-receta fecha="{{ $fecha }}"></fecha-receta>

            </p>
        </div>

        <div class="receta-ingredientes mt-5">
            <h5 class="font-weight-bold text-primary">Ingredientes:</h5>
            {!! $receta->ingredientes !!}
        </div>

        <div class="receta-preparacion mt-5">
            <h5 class="font-weight-bold text-primary">Preparación:</h5>
            {!! $receta->preparacion !!}
        </div>
        <div class="justify-content-center row text-center">
            <like-button
               receta="{{ $receta->id}}"
               like="{{$like}}" 
               likes="{{$likes}}"
            >
            </like-button>
        </div>
    </article>
</div>


@endsection
