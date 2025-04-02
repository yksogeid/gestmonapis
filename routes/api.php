<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PersonaCarreraController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SolicitudAsesoriaController;
use App\Http\Controllers\UsuarioController;

Route::apiResource('carreras', CarreraController::class);
Route::apiResource('materias', MateriaController::class);
Route::apiResource('personas', PersonaController::class);
Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('roles', RolController::class);
Route::apiResource('solicitudes-asesoria', SolicitudAsesoriaController::class);
Route::resource('persona-carreras', PersonaCarreraController::class);