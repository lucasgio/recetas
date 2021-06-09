<div class="col-md-4 mt-4">
    <div class="card shadow ">
        <img class="card-top-img" src="/storage/{{ $receta->imagen }}" alt="Imagen recetas">
        <div class="card-body">
            <p class="">{{ $receta->nombreReceta }}</p>
            <p>{!! Str::words(strip_tags($receta->preparacion), 20) !!}</p>
            <div class="meta-receta d-flex justify-content-between">
                <p>
                    <span class="font-weight-bold text-primary">Creado:</span>
                    @php
                        $fecha = $receta->created_at;
                    @endphp
                    <fecha-receta fecha="{{ $fecha }}"></fecha-receta>
                </p>

                <p>{{ count($receta->cantidadLikes) }} les gusto</p>
            </div>
            <p>
                <span class="font-weight-bold text-primary">Subida por:</span>
                {{ $receta->author->name }}
            </p>
            <a type="button" class="btn btn-outline-primary btn-flat"
                href="{{ route('recetas.show', ['receta' => $receta->id]) }}">Ver receta</a>
        </div>
    </div>
</div>
