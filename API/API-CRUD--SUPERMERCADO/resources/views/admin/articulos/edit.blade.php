@extends('layouts.plantillaAdmin')

@section('title', 'Editar Articulo')

@section('cuerpo')
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="{{ route('articulos.update', $articulo) }}" enctype="multipart/form-data"   >
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre</label><br>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $articulo->nombre) }}" >
                <br>
                @error('nombre')
                    <small class="text-danger">* {{ $message }}</small>
                @enderror
                
                </div>
                
                <div class="form-group">
                    <label for="descripcion">Descripcion</label><br>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10">{{ old('descripcion', $articulo->descripcion) }}
                    </textarea>
                    @error('descripcion')
                        <small class="text-danger">* {{ $message }}</small>
                    @enderror
                </div>

                
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <select class="form-control" name="id_marca">
                        @foreach($marcas as $marca)
                        <?php $selected = ($marca->id == $articulo->id_marca) ? "selected": ""; ?>
                        <option value="{{ $marca->id }}" {{ $selected }} > {{ $marca->nombre }}</option> 
                        @endforeach
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="precio">Precio</label><br>
                    <input type="text" id="precio" name="precio" value="{{ old('precio', $articulo->precio) }}" >
                <br>
                @error('precio')
                    <small class="text-danger">* {{ $message }}</small>
                @enderror

                
                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Enviar </button>
                </div>
            </form>
        </div>
    </div>
@endsection

