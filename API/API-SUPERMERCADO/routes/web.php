<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api-supermercado/articulos', [ArticuloController::class, 'indexSupermercado']);

Route::get('/api-supermercado/articulos/id/{articulo}', [ArticuloController::class, 'show'])->name('show');

Route::get('/api-supermercado/articulos/nombre/{articulo}', [ArticuloController::class, 'showXNombre'])->name('showXNombre');

Route::get('/api-supermercado/articulos/marca/{marca}', [ArticuloController::class, 'showXMarca'])->name('showXMarca');

Route::get('/api-supermercado/articulos/categoria/{categoria}', [ArticuloController::class, 'showXCategoria'])->name('showXCategoria');

Route::get('/api-supermercado/categorias/{id}', [CategoriaController::class, 'show'])->name('showCategoria');

Route::get('/api-supermercado/categorias', [CategoriaController::class, 'index'])->name('indexCategoria');

Route::get('/api-supermercado/marcas/{id}', [MarcaController::class, 'show'])->name('showMarca');

Route::get('/api-usuario/articulos', [ArticuloController::class, 'indexUsuario']);

Route::get('/api-usuario/articulo/nombre/{articulo}', [ArticuloController::class, 'showxNombreUsuario']);

Route::get('/api-usuario/{nombre}/{precio}/{marca}/{categoria}', [ArticuloController::class, 'store']);

Route::post('/api-usuario/articulo', [ArticuloController::class, 'updateRestar']);

Route::get('/api-usuario/{articulo}', [ArticuloController::class, 'destroy']);


//Route::get('/api-usuario/{nombre}/{precio}/{marca}/{categoria}', [ArticuloController::class, 'store']);
