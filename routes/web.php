<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;

Route::get('/registro', [AuthController::class, 'mostrarRegistro']);

Route::post('/registro', [AuthController::class, 'registrar']); 

Route::get('/', function () {
    return view('inicio');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/login', [UsuarioController::class, 'mostrarLogin']);

Route::post('/login', [UsuarioController::class, 'procesarLogin']);

Route::get('/recuperar-password', [UsuarioController::class, 'mostrarRecuperarPassword']);

Route::post('/recuperar-password', [UsuarioController::class, 'actualizarPassword']);

Route::post('/logout', [UsuarioController::class, 'logout']);

Route::get('/chat', [UsuarioController::class, 'mostrarChat']);

Route::get('/carrito', [UsuarioController::class, 'mostrarCarrito']);
Route::post('/agregar-carrito', [UsuarioController::class, 'agregarCarrito']);
Route::post('/pagar', [UsuarioController::class, 'pagar']);

Route::get('/recuperar-password', [UsuarioController::class, 'mostrarRecuperarPassword']);

Route::post('/recuperar-password', [UsuarioController::class, 'actualizarPassword']);
