@extends('layouts.app')

@section('content')
    
    <div class="container">
       <div class="justify-content-center d-flex">
            <img src="{{ asset('error.png')}}" class="imagen-error " alt="Imagen de error">
       </div>

       <div class="info mt-5">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Uppsss!</h4>
                <p>Por motivos de seguridad usted no puede dar like a esta receta sin estar ante registrado.</p>
                <p>Si se registra puede dar likes a sus recetas favoritas o puede crear nuevas recetas o recibir esos likes.</p>
                <p>Si desea registrarse es muy facil de click en botón  registrar y llene los datos.Gracias !!!!</p>
                <hr>
                <a type="button" class="btn btn-success btn-sm" href="{{ route('register') }}">Registrarse</a>
            </div>            
       </div>
    </div>



@endsection