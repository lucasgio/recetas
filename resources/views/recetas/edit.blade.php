@extends('layouts.app')


@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('botones')
<div class="btn-group" role="group" aria-label="Basic example">
    <a type="button" href="{{route('recetas.index')}}" class="btn btn-primary mx-2"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</a>
</div>
@endsection






{{-- Form create receta --}}
@section('content')
<h1 class="text-center mt-5 mb-5">Editar Recetas</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action={{  route('recetas.update', ['receta'=> $receta->id]) }} novalidate enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tiutlo">Nombre de la receta</label>
                <input 
                    type="text" 
                    class="form-control @error('nombreReceta') is-invalid @enderror"
                    autocomplete="off"
                    id="nombreReceta"
                    name="nombreReceta"
                    value="{{$receta->nombreReceta}}"
                    placeholder="Introduzca el nombre de la receta"
                />
                @error('nombreReceta')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="categoria">Categorias de recetas</label>
                <select 
                    name="categoriaReceta" 
                    id="categoriaReceta" 
                    class="form-control @error('categoriaReceta') is-invalid @enderror"
                    >
                    <option value="">-- Seleccione una categoria --</option>
                    @foreach ($categoria as $cat)
                        <option value="{{$cat->id}}" {{$receta->id == $cat->id ? 'selected' : ''}} >{{$cat->categoria}}</option>
                    @endforeach
                </select>
                @error('categoriaReceta')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="ingredientes">Ingredientes</label>
                <input type="hidden" id="ingredientes" name="ingredientes" value="{{$receta->ingredientes}}">
                <trix-editor 
                    class="form-control @error('ingredientes') is-invalid @enderror"
                    input="ingredientes"
                >
                </trix-editor>
                @error('ingredientes')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="preparacion">Preparacion</label>
                <input type="hidden" id="preparacion" name="preparacion" value="{{$receta->preparacion}}">
                <trix-editor
                    class="form-control @error('preparacion') is-invalid @enderror" 
                    input="preparacion"
                >
                </trix-editor>
                @error('preparacion')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="imagen">Imagenes</label>
                <div class="card">
                    <input
                        class="form-control @error('imagenes') is-invalid @enderror" 
                        type="file" 
                        name="imagenes" 
                        id="imagenes"
                    />
                    <div class="imagen-actual mt-4">
                        <p class="font-weight-bold   text-primary px-2">Imagen Actual</p>
                        <img class="w-100" src="{{$receta->imagen}}" alt="Imagenactual de la receta">
                    </div>
                    @error('imagenes')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Guardar cambios"/>
                <input type="reset" class="btn btn-secondary" value="Resetear campos"/>
            </div>
        </form>
    </div>
</div>


@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.min.js" integrity="sha512-lyT4F0/BxdpY5Rn1EcTA/4OTTGjvJT9SxWGxC1boH9p8TI6MzNexLxEuIe+K/pYoMMcLZTSICA/d3y0ColgiKg==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection
