<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\PuestoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login',[LoginController::class,'login']);

Route::post('permisos/guardar',[PermisosController::class, 'store']);
Route::post('permisos/eliminar',[PermisosController::class, 'delete']);

Route::post('divisiones/guardar',[DivisionController::class, 'storeAPI']);
Route::post('divisiones/eliminar',[DivisionController::class, 'deleteAPI']);

Route::post('profesores/guardar',[ProfesorController::class, 'storeAPI']);
Route::post('profesores/eliminar',[ProfesorController::class, 'deleteAPI']);

Route::post('puestos/guardar',[PuestoController::class, 'storeAPI']);
Route::post('puestos/eliminar',[PuestoController::class, 'deleteAPI']);



