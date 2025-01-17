@extends('layouts.plantillaAdmin')

@section('title', 'ABM Categorias')</title>

@section('cuerpo')


    <p class="text-center text-9x1 mb-4"><b><u>Alta, Baja y Modificaciones <br> de Categorias</u></b></p>

    <table class="table table-bordered striped">
        <thead>
            <tr class='text-white' style="background-color: dodgerblue;">
                <td>Categorias</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td><b>{{ $categoria->nombre }}</b></td>
                    <td>
                        <a class='btn btn-lg bg-primary'style='width:60 px; height:40px' href="{{ route('categorias.edit', $categoria) }}" class="btn btn-primary"><span class="fa fa-edit"> </span></a>
                        <form action="{{ route('categorias.destroy', $categoria) }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="mt-1 btn btn-lg bg-danger " style='width:60 px; height:40px' type="submit"><span class="fa fa-trash"></button>
                        </form>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categorias->links() }}
    <a href="{{ route('categorias.create') }}" class="btn btn-success"><span class="fa fa-plus"> Agregar Categoria </span></a>

@endsection
