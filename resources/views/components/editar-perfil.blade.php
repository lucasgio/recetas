<h3 class="text-primary text-center mb-5">Edite su perfil</h3>
<form action="{{ route('perfiles.update', ['perfil' => $perfil->id]) }}" enctype="multipart/form-data"
    method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="Nombre usuario"> Nombre y apellidos</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name="nombre" 
                    id="nombre_usuario"
                    value="{{ $perfil->users->name}}"
                />
                @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <small id="helpId" class="form-text text-muted"><strong  class="form-text text-muted">Escriba su nombre completo ej: Juan Alvarez</strong> </small>
            </div>
            <div class="col-md-6">
                <label for="Nombre usuario"> Nombre usuario</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name="usuario" 
                    id="nombre_usuario"
                />
                @error('usuario')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <small id="helpId"> <strong  class="form-text text-muted">Escriba su nombre de usuario ej: @juan_91</strong>  </small>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label for="biografia">Sobre ti</label>
        <input type="hidden" id="biografia" name="biografia" value="{{$perfil->bio}}">
        <trix-editor
            class="form-control @error('biografia') is-invalid @enderror" 
            input="biografia"
        >
        </trix-editor>
        @error('biografia')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="platos_preferidos">Platos Preferidos</label>
        <input type="hidden" id="platos_preferidos" name="platos_preferidos" value=" @if ($perfil->platos_preferidos) {{$perfil->platos_preferidos}} @endif ">
        <trix-editor
            class="form-control @error('platos_preferidos') is-invalid @enderror" 
            input="platos_preferidos"
        >
        </trix-editor>
        @error('platos_preferidos')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="imagen">Imagen de perfil</label>
        <input 
            type="file" 
            class="form-control-file" 
            name="imagen_perfil" 
        >
        @error('imagen_perfil')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
        @enderror
    </div>
    @if ($perfil->imagen_perfil)
        <div class="form-group">
            <label class="text-center" for="imagen_subida">Imagen</label>
        </br>
            <img class="rounded-circle" src="{{$perfil->imagen_perfil}}" alt="Imagen de perfil">
        </div>
    @endif
    <input type="submit" class="btn btn-primary mt-2" value="Guardar perfil">
</form>