<div class="card mx-1">
    <img src="{{ $nueva->imagen }}" alt="Imagen receta">
    <div class="card-body">
        <h3>{{ $nueva->nombreReceta }}</h3>
        <p>{!! Str::words(strip_tags($nueva->preparacion), 20) !!}</p>
        <a type="button" class="btn btn-outline-primary btn-flat mt-5"
            href="{{ route('recetas.show', ['receta' => $nueva->id]) }}">Ver receta</a>
    </div>
</div>