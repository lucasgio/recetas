<div class="col-md-6">
    <form action={{ route('recetas.store') }} novalidate enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
            <label for="tiutlo">Nombre de la receta</label>
            <input type="text" class="form-control @error('nombreReceta') is-invalid @enderror"
                autocomplete="off" id="nombreReceta" name="nombreReceta" value="{{ old('nombreReceta') }}"
                placeholder="Introduzca el nombre de la receta" />
            @error('nombreReceta')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="categoria">Categorias de recetas</label>
            <select name="categoriaReceta" id="categoriaReceta"
                class="form-control @error('categoriaReceta') is-invalid @enderror">
                <option value="">-- Seleccione una categoria --</option>
                @foreach ($categoria as $cat)
                    <option value="{{ $cat->id }}"
                        {{ old('categoriaReceta') == $cat->id ? 'selected' : '' }}>{{ $cat->categoria }}</option>
                @endforeach
            </select>
            @error('categoriaReceta')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="ingredientes">Ingredientes</label>
            <input type="hidden" id="ingredientes" name="ingredientes" value="{{ old('ingredientes') }}">
            <trix-editor class="form-control @error('ingredientes')  is-invalid @enderror" input="ingredientes">
            </trix-editor>
            <div class="d-inline-flex p-2 bd-highlight">
                <i class="fa fa-question"></i>
                <small id="helpId">
                <strong  class="form-text text-muted">Detalle los ingredientes de la receta</strong>
                </small>
            </div>
            @error('ingredientes')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="preparacion">Preparacion</label>
            <input type="hidden" id="preparacion" name="preparacion"  value="{{ old('preparacion') }}">
            <trix-editor class="form-control @error('preparacion') is-invalid @enderror" input="preparacion">
            </trix-editor>
            <div class="d-inline-flex p-2 bd-highlight">
                <i class="fa fa-question"></i>
                <small id="helpId">
                <strong  class="form-text text-muted">Explique como preparar esta receta</strong>
                </small>
            </div>
            @error('preparacion')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="imagen">Imagenes</label>
            <div class="card">
                <input class="form-control @error('imagenes') is-invalid @enderror" type="file" name="imagenes"
                    id="imagenes" />
                @error('imagenes')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Guardar receta" />
            <input type="reset" class="btn btn-secondary" value="Resetear campos" />
        </div>
    </form>
</div>