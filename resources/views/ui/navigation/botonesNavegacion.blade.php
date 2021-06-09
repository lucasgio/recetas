<div class="container overflow-hidden">
    <div class="row gx-3">
      <div class="col-xs-2 mb-2 ">
        <a 
            type="button" 
            id="btn_create" 
            href="{{ route('recetas.create')}}" 
            class="btn btn-outline-primary text-uppercase font-weight-bold mx-2">
            <i class="fa fa-plus" aria-hidden="true"></i> 
            Crear Receta
        </a>
      </div>
      <div class="col-xs-2 mb-2 ">
        <a 
            type="button" 
            href="{{ route('perfiles.edit', ['perfil'=> Auth::user()->id]) }}" 
            class="btn btn-outline-primary text-uppercase font-weight-bold mx-2">
            <i class="fa fa-edit" aria-hidden="true"></i> 
            Editar Perfil
        </a>
      </div>
      <div class="col-xs-2 mb-2 ">
        <a 
            type="button" 
            href="{{ route('perfiles.show', ['perfil'=> Auth::user()->id]) }}" 
            class="btn btn-outline-primary text-uppercase font-weight-bold mx-2">
            <i class="fa fa-eye" aria-hidden="true"></i> 
            Ver Perfil
        </a>
      </div>
      {{-- <div class="col-xs-2 ">
        <a  
        
            type="button" 
            href="{{ route('categoria.index', ['perfil'=> Auth::user()->id]) }}" 
            class="btn btn-outline-primary text-uppercase font-weight-bold mx-2">
            <i class="fa fa-list" aria-hidden="true"></i> 
            Crear Categoria
        </a>
      </div> --}}
    </div>
  </div>

