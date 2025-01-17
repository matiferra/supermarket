@extends('layouts.plantillaAdmin')

@section('title', 'Crear Categoria')

@section('cuerpo')
    <form method="POST" action="{{ route('categorias.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"  placeholder="Ingrese un nombre" >
            <br>
            
            @error('nombre')
                <small class="text-danger">* {{ $message }}</small>
            @enderror

        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
