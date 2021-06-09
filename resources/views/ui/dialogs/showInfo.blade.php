<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Información!</strong> 
    <p> Su perfil no esta completado todavia. Desea completarlo?.</p> 
    <a type="button" class="btn btn-primary btn-sm" href="{{ route('perfiles.edit', ['perfil'=> $perfil->id]) }}">Completar Perfil</a>    
    <a type="button" class="btn btn-secondary btn-sm" href="{{ route('recetas.index') }}"> No </a>
</div>