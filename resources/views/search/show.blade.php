@extends('layouts.app')


@section('content')

    <div class="container">
        <x-boton-back />
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Busqueda: {{ $busquedaReceta }}</h2>
        <div class="row">
            @foreach ($recetas as $receta)
                @include('customtemplates.categoria')
            @endforeach
        </div>
    </div>

    {{-- <div class="d-flex justify-content-center mt-5">{{ $recetas->links() }}</div> --}}
@endsection
