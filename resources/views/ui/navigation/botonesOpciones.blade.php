<a href="{{ action('RecetaController@show', ['receta' => $receta->id]) }}" type="button" id="view_receta"
    class="btn btn-primary btn-sm d-block mb-2"><i class="fa fa-eye" aria-hidden="true"></i> Visualizar Receta</a>
<a href="{{ action('RecetaController@edit', ['receta' => $receta->id]) }}" type="button" id="edit_receta"
    class="btn btn-primary btn-sm d-block mb-2"><i class="fa fa-edit" aria-hidden="true"></i> Editar Receta</a>
<eliminar-receta receta="{{ $receta->id }}">
</eliminar-receta>
