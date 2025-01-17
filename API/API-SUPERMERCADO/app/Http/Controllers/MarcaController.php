<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MarcaController extends Controller
{

    public function index()
    {
        return response()->json(Marca::all());
    }
    
    public function show($id)
    {
        $marca = Marca::find($id);

        return response()->json($marca);
    }





}
