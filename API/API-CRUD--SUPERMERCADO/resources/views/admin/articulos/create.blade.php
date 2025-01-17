@extends('layouts.plantillaAdmin')

@section('title', 'Crear Articulo')

@section('cuerpo')
    <form method="POST" action="{{ route('articulos.store') }}" enctype="multipart/form-data">
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
            <label for="descripcion">Descripcion</label><br>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10">
            </textarea>
            <br>

        </div>
        <div class="form-group">
            <label for="precio">precio</label><br>
            <input type="double" id="precio" name="precio" value="" placeholder="Ingrese el precio">
            <br>
            
            @error('precio')
                <small class="text-danger">* {{ $message }}</small>
            @enderror

        </div>
        <div class="form-group">
            <label for="id_marca">Marca</label>
            <select name="id_marca">
        @foreach ($marcas as $marca)
                <option value="{{ $marca->id }}" selected> {{ $marca->nombre }}</option> 
        @endforeach
            </select> <br>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection

