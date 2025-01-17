@extends('layouts.plantillaAdmin')

@section('title', 'Crear Marca')

@section('cuerpo')
    <form method="POST" action="{{ route('marcas.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"  placeholder="Ingrese un nombre" >
            <br>
            
            @error('nombre')
                <small class="text-danger">* {{ $message }}</small>
            @enderror

        </div>
        
        <div class="form-group">
            <label for="id_categoria">Categoria</label>
            <select name="id_categoria">
        @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" selected> {{ $categoria->nombre }}</option> 
        @endforeach
        </select> <br>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
