@extends('layouts.plantillaAdmin')

@section('title', 'ABM Marcas')</title>

@section('cuerpo')

    <p class="text-center text-9x1 mb-4"><b><u>Alta, Baja y Modificaciones <br> de Marcas</u></b></p>

    <table class="table table-bordered striped">
        <thead>
            <tr class='text-white' style="background-color: dodgerblue;">
                <td>Marca</td>
                <td>Categoria</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($marcas as $marca)
                <tr>
                    <td><b>{{ $marca->nombre }}</b></td>.
                    @foreach($categorias as $categoria)
                        @if($categoria->id == $marca->id_categoria)
                            <td>{{ $categoria->nombre }}</td>
                        @endif
                    @endforeach
                    <td>
                        <a class='btn btn-lg bg-primary'style='width:60 px; height:40px' href="{{ route('marcas.edit', $marca) }}" class="btn btn-primary"><span class="fa fa-edit"> </span></a>
                        <form action="{{ route('marcas.destroy', $marca) }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="mt-1 btn btn-lg bg-danger " style='width:60 px; height:40px' type="submit"><span class="fa fa-trash"></button>
                        </form>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $marcas->links() }}
    <a href="{{ route('marcas.create') }}" class="btn btn-success"><span class="fa fa-plus"> Agregar Marca </span></a>

@endsection
