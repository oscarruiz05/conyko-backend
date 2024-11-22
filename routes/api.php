<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistroController;
use App\Http\Controllers\TareasController;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');
Route::post('registro', [RegistroController::class, 'registro']);
Route::apiResource('tareas', TareasController::class)->middleware('auth:sanctum');
