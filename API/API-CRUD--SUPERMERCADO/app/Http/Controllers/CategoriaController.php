<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{


    public function index()
    {
        $categorias = Categoria::orderBy('nombre', 'asc')->paginate(8);
        return view('admin.categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('admin.categorias.create');
    }

    public function store(Request $request)
    {

        $data = array_merge($request->all(), ['slug' => Str::slug($request->input('nombre'))]);

        Categoria::create($data);
        
        return redirect()->route('categorias.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Categoria $categoria)
    {

        return view('admin.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        
        $data = array_merge($request->all(), ['slug' => Str::slug($request->input('nombre'))]);

        $categoria->update($data);

        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();        
        return redirect()->back();
    }
}
