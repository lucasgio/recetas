@extends('layouts.app')


@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css"
        integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('botones')
    @include('botonback')
@endsection



{{-- Form create receta --}}
@section('content')
    <div class="container-fluid">
        <h1 class="text-center mt-5 mb-5">Crear nueva Recetas</h1>
        <div class="row justify-content-center">
            @include('createformrecipies')
        </div>
    </div>


@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.min.js"
        integrity="sha512-lyT4F0/BxdpY5Rn1EcTA/4OTTGjvJT9SxWGxC1boH9p8TI6MzNexLxEuIe+K/pYoMMcLZTSICA/d3y0ColgiKg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection
