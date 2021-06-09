@extends('layouts.app')




@section('content')
<h1 class="text-center mt-5 mb-5">Categorias</h1>

<div class="col-md-8 mx-auto bg-white">
    <table class="table table-hover">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Categoria</th>
            {{-- <th scope="col">Acciones</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($categoria as $cat)
          @php
             $fecha = $cat->created_at 
          @endphp
          <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->categoria}}</td>
            {{-- <td>
              @include('ui.navigation.botonesopciones')
            </td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
</div>


@endsection
