<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{


    public function index()
    {
        return response()->json(Categoria::all());
    }
    
    public function show($id)
    {
        $categoria = Categoria::find($id);

        return response()->json($categoria);
    }





}
