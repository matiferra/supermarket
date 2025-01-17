<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api-supermercado/articulos', [ArticuloController::class, 'indexSupermercado']);

Route::get('/api-supermercado/articulos/id/{articulo}', [ArticuloController::class, 'show'])->name('show');

Route::get('/api-supermercado/articulos/nombre/{articulo}', [ArticuloController::class, 'showXNombre'])->name('showXNombre');

Route::get('/api-supermercado/articulos/marca/{articulo}', [ArticuloController::class, 'showXMarca'])->name('showXMarca');

Route::get('/api-usuario/articulos', [ArticuloController::class, 'indexUsuario']);

Route::get('/api-usuario/{nombre}/{precio}/{marca}/{categoria}', [ArticuloController::class, 'store']);

Route::get('/api-usuario/{cantidad}/{articulo}', [ArticuloController::class, 'update']);

Route::get('/api-usuario/{articulo}', [ArticuloController::class, 'destroy']);
