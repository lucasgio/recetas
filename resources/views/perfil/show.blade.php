@extends('layouts.app')


@section('content')
    @if ($perfil->imagen_perfil)
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img class="rounded-circle" src="/storage/{{ $perfil->imagen_perfil }}" alt="">
                    <div class="biografia mt-5">
                        <p class="text-primary">Sobre ti</p>
                        {!! $perfil->bio !!}
                    </div>
                </div>
                <div class="col-md-7 text-primary text-center mb-2 mt-5">
                    <label class="lead" for="Nombre">Nombre Completo</label>
                    <h6> {{ $perfil->users->name }} </h6>
                    <label class="lead" for="Usuario">Usuario</label>
                    <h6>{{ $perfil->username }}</h6>
                    <label class="lead" for="Platos">Platos Preferidos</label>
                    {!! $perfil->platos_preferidos !!}

                </div>
            </div>
        </div>
        <h2 class="text-center my-5"> Recetas Creadas por: {{ $perfil->users->name }}</h2>
        <div class="container">
            <div class="row mx-auto bg-white p-4">
                @if (count($receta) > 0)
                    @foreach ($receta as $recetas)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="/storage/{{ $recetas->imagen }}" alt="Imagen de recetas">
                                <div class="card-body mt-2">
                                    <h6>{{ $recetas->nombreReceta }}</h6>
                                    <a type="button" class="btn btn-outline-primary text-uppercase"
                                        href="{{ route('recetas.show', ['receta' => $recetas->id]) }}">Ver recetas</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                <p class="text-center w-100"> No tiene recetas creadas!!!</p>
                @endif
                <div class="col-12 justify-content-center d-flex mt-5">
                    {{$receta->links()}}
                </div>
            </div>
        </div>
    @else
        @include('ui.dialogs.showinfo')
    @endif


@endsection
