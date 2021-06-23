@extends('layouts.app')






@section('botones')
    <x-botones-navegacion />
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
                        $fecha = $receta->created_at;
                    @endphp
                    <tr>
                        <td>{{ $receta->nombreReceta }}</td>
                        <td>{{ $receta->categoria->categoria }}</td>
                        <td>{{ $receta->author->name }}</td>
                        <td>
                            <a href="{{ action('RecetaController@show', ['receta' => $receta->id]) }}" type="button"
                                id="view_receta" class="btn btn-primary btn-sm d-block mb-2"><i class="fa fa-eye"
                                    aria-hidden="true"></i> Visualizar Receta</a>
                            <a href="{{ action('RecetaController@edit', ['receta' => $receta->id]) }}" type="button"
                                id="edit_receta" class="btn btn-primary btn-sm d-block mb-2"><i class="fa fa-edit"
                                    aria-hidden="true"></i> Editar Receta</a>
                            <eliminar-receta receta="{{ $receta->id }}">
                            </eliminar-receta>
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
