<?php

use Illuminate\Http\Request;

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

Route::post('guardar-usuario','Controller@guardarUsuario');
Route::post('guardar-juego','Controller@guardarJuego'); 
Route::get('cargar-puntajes','Controller@cargarPuntajes');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
