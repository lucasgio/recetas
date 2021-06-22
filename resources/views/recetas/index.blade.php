@extends('layouts.app')






@section('botones')    
  @include('botonesnavegacion')
@endsection

@section('content')
<h1 class="text-center mt-5 mb-5">Recetas</h1>

<div class="col-md-8 mx-auto bg-white">
    <table class="table table-hover">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Creado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($recetas as $receta)
          @php
             $fecha = $receta->created_at 
          @endphp
          <tr>
            <td>{{$receta->nombreReceta}}</td>
            <td>{{$receta->categoria->categoria}}</td>
            <td>{{$receta->author->name}}</td>
            <td>
              @include('botonesopciones')
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="col-12 mt-5 justify-content-center d-flex">
        {{ $recetas->links() }}
      </div>
</div>


@endsection


