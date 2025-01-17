<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionArticulo;
use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticuloController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $articulos = Articulo::orderBy('id_marca', 'asc')->paginate(8);
        return view('admin.articulos.index', compact('articulos', 'marcas', 'categorias'));

    }

    public function create()
    {
        $marcas = Marca::all();
        return view('admin.articulos.create', compact('marcas'));
    }

    
    public function store(ValidacionArticulo $request)
    {
        $data = array_merge($request->all(), ['slug' => Str::slug($request->input('nombre'))]);

        Articulo::create($data);

        return redirect()->route('articulos.index');
    }

    
    
    public function show($id)
    {
        //
    }

    
    public function edit(Articulo $articulo)
    {
        $marcas = Marca::all();
        return view('admin.articulos.edit', compact('articulo', 'marcas'));
    }

    public function update(ValidacionArticulo $request, Articulo $articulo)
    {
     
        $data = array_merge($request->all(), ['slug' => Str::slug($request->input('nombre'))]);

        $articulo->update($data);

        return redirect()->route('articulos.index');
    }

    
    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return redirect()->back();
    }
}
