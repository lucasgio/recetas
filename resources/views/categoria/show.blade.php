@extends('layouts.app')


@section('content')

    <div class="container">
        @include('custom.botonback')
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Categorias: {{$categoria->categoria}}</h2>
        <div class="row">
            @foreach ($recetas as $receta)
                @include('custom.categoria')
            @endforeach
        </div>
    </div>
    
    <div class="d-flex justify-content-center mt-5">{{$recetas->links()}}</div>
@endsection