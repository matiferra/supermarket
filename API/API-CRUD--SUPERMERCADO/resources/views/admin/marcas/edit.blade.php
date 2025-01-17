@extends('layouts.plantillaAdmin')

@section('title', 'Editar Marca')

@section('cuerpo')
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="{{ route('marcas.update', $marca) }}" enctype="multipart/form-data"   >
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre</label><br>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $marca->nombre) }}" >
                <br>
                @error('nombre')
                    <small class="text-danger">* {{ $message }}</small>
                @enderror
                
                </div>
                
                <div class="form-group">
                    <label for="marca">Categoria</label>
                    <select class="form-control" name="id_categoria">
                        @foreach($categorias as $categoria)
                        <?php $selected = ($categoria->id == $marca->id_categoria) ? "selected": ""; ?>
                        <option value="{{ $categoria->id }}" {{ $selected }} > {{ $categoria->nombre }}</option> 
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Enviar </button>
                </div>
            </form>
        </div>
    </div>
@endsection