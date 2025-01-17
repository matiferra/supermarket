@extends('layouts.plantillaAdmin')

@section('title', 'Editar Categoria')

@section('cuerpo')
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="{{ route('categorias.update', $categoria) }}" enctype="multipart/form-data"   >
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre</label><br>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $categoria->nombre) }}" >
                <br>
                    @error('nombre')
                        <small class="text-danger">* {{ $message }}</small>
                    @enderror
                </div> <br>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Enviar </button>
                </div>
            </form>
        </div>
    </div>
@endsection