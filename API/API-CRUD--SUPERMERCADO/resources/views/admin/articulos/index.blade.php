@extends('layouts.plantillaAdmin')

@section('title', 'ABM Articulos')</title>

@section('cuerpo')

    <p class="text-center text-9x1 mb-4"><b><u>Alta, Baja y Modificaciones <br> de Articulos</u></b></p>
    <table class="table table-bordered striped">
        <thead>
            <tr class='text-white' style="background-color: dodgerblue;">
                <td><b>Codigo</b></td>
                <td><b>Articulos</b></td>
                <td><b>Precio</b></td>
                <td><b>Marcas</b></td>
                <td><b>Categoria</b></td>
                <td><b>Acciones</b></td>
            </tr>
        </thead>
        <tbody>
            @foreach($articulos as $articulo)
                <tr>
                <td><b>{{ $articulo->id }}</b></td>
                <td><b>{{ $articulo->nombre }}</b></td>
                <td><b>{{ $articulo->precio }}</b></td>
                @foreach($categorias as $categoria)
                    @foreach($marcas as $marca)
                        @if($categoria->id == $marca->id_categoria && $marca->id == $articulo->id_marca)
                            <td>{{ $categoria->nombre }}</td>
                        @endif
                    @endforeach
                @endforeach
                @foreach($marcas as $marca)
                    @if($marca->id == $articulo->id_marca)
                        <td>{{ $marca->nombre }}</td>
                    @endif
                @endforeach
                    <td>
                        <a class='btn btn-lg bg-primary'style='width:60 px; height:40px' href="{{ route('articulos.edit', $articulo) }}" class="btn btn-primary"><span class="fa fa-edit"> </span></a>
                        <form action="{{ route('articulos.destroy', $articulo) }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="mt-1 btn btn-lg bg-danger " style='width:60 px; height:40px' type="submit"><span class="fa fa-trash"></button>
                        </form>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $articulos->links() }}
    <a href="{{ route('articulos.create') }}" class="btn btn-success"><span class="fa fa-plus"> Agregar Articulo </span></a>

@endsection
