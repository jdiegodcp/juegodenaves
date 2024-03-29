<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::post('guardar-usuario',[Controller::class, 'guardarUsuario']);
Route::post('guardar-juego',[Controller::class, 'guardarJuego']);
Route::get('cargar-puntajes',[Controller::class, 'cargarPuntajes']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});