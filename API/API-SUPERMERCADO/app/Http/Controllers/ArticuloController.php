<?php

namespace App\Http\Controllers;

use App\Models\ArticuloUsuario;
use App\Models\ArticuloSuperMercado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    public function indexUsuario()
    {
        return ArticuloUsuario::all();
    }

    public function indexSupermercado()
    {
        return ArticuloSuperMercado::all();
    }
    
    public function show(ArticuloSuperMercado $articulo)
    {
        return response()->json($articulo);
    }

    public function showxNombreUsuario($nombre)
    {
        
        $nombre = str_replace("%20", " ", $nombre);
        $articulo = DB::connection('mysql')->table('articulos')->where('nombre', $nombre)->first();
        
        $articuloUsuario = ArticuloUsuario::find($articulo->id);

        return response()->json($articuloUsuario);
    }

    public function showXCategoria($categoria)
    {
        $articulos = array();
        $categoria = str_replace("%20", " ", $categoria); 
        $categoria = DB::connection('mysql_supermercado')->table('categorias')->where('nombre', $categoria)->first();
        $marcas = DB::connection('mysql_supermercado')->table('marcas')->where('id_categoria', $categoria->id)->get()->all();
        foreach($marcas as $marca){
            array_push($articulos, DB::connection('mysql_supermercado')->table('articulos')->where('id_marca', $marca->id)->get()->all());
        }
            
        return response()->json($articulos);
    }

    public function showXMarca($marca)
    {
        $marca = str_replace("%20", " ", $marca); 
        $marca = DB::connection('mysql_supermercado')->table('marcas')->where('nombre', $marca)->first();
        $articulos = DB::connection('mysql_supermercado')->table('articulos')->where('id_marca', $marca->id)->get();
            
        return response()->json($articulos);
    }


    public function showXNombre($nombre)
    {

        $nombre = str_replace("%20", " ", $nombre);
        $articulo = DB::connection('mysql_supermercado')->table('articulos')->where('nombre', $nombre)->first();
        
        return response()->json($articulo);
    }



    public function store($nombre, $precio, $marca, $categoria)
    {
        $nombre = str_replace("%20", " ", $nombre);
        $marca = str_replace("%20", " ", $marca);
        $categoria = str_replace("%20", " ", $categoria);

        $articulo = DB::connection('mysql')->table('articulos')->where('nombre', $nombre)->first();
        
        if($articulo == null){
            ArticuloUsuario::create([
                'cantidad' => 1,
                'nombre' => $nombre,
                'precio' => $precio,
                'marca' => $marca,
                'categoria' => $categoria,
            ]);    
        } else {
            $article = ArticuloUsuario::find($articulo->id);
            $article->update([
                'cantidad' => $articulo->cantidad + 1 ,
            ]);    
        }
        
        return response()->json($articulo, 201);
    }


    public function updateRestar(Request $request)
    {
        //$nombre = str_replace("%20", " ", );
        $articulo = DB::connection('mysql')->table('articulos')->where('nombre', $request->input('nombre'))->first();
        
        $articuloUsuario = ArticuloUsuario::find($articulo->id); 

        $cantidadNueva = $articuloUsuario->cantidad - 1;

        $articuloUsuario->update([
            'cantidad' => $cantidadNueva,
        ]);

        return response()->json($articulo);
    }

        
    public function destroy(ArticuloUsuario $articulo)
    {
        $articulo->delete();

        return response()->json(null, 204);

    }

}
