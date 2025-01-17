<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionMarca;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MarcaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $marcas = Marca::orderBy('nombre', 'asc')->paginate(8);
        return view('admin.marcas.index', compact('marcas', 'categorias'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.marcas.create', compact('categorias'));
    }

    public function store(ValidacionMarca $request)
    {

        $data = array_merge($request->all(), ['slug' => Str::slug($request->input('nombre'))]);

        Marca::create($data);
        
        return redirect()->route('marcas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Marca $marca)
    {
        $categorias = Categoria::all();
        return view('admin.marcas.edit', compact('marca', 'categorias'));
    }

    public function update(ValidacionMarca $request, Marca $marca)
    {
        
        $data = array_merge($request->all(), ['slug' => Str::slug($request->input('nombre'))]);

        $marca->update($data);

        return redirect()->route('marcas.index');
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();        
        return redirect()->back();
    }
}
