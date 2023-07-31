<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('listar-usuarios', [UsuariosController::class, 'index']);
Route::post('crear-usuario', [UsuariosController::class, 'store']);
Route::get('buscar-usuario/{id}', [UsuariosController::class, 'show']);
Route::put('actualizar-usuario/{id}', [UsuariosController::class, 'update']);
Route::delete('eliminar-usuario/{id}', [UsuariosController::class, 'destroy']);

Route::get('listar-clientes', [ClientesController::class, 'index']);
Route::post('crear-cliente', [ClientesController::class, 'store']);
Route::get('buscar-cliente/{id}', [ClientesController::class, 'show']);
Route::put('actualizar-cliente/{id}', [ClientesController::class, 'update']);
Route::delete('eliminar-cliente/{id}', [ClientesController::class, 'destroy']);

Route::get('listar-citas', [CitasController::class, 'index']);
Route::post('crear-cita', [CitasController::class, 'store']);
Route::get('buscar-cita/{id}', [CitasController::class, 'show']);
Route::put('actualizar-cita/{id}', [CitasController::class, 'update']);
Route::delete('eliminar-cita/{id}', [CitasController::class, 'destroy']);


Route::post('login', [AuthController::class, 'login']);

