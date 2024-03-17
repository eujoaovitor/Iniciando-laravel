<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// ROTA INDEX DO CLIENTE
Route::get('/index-cliente', [ClienteController::class, 'index'])->name('cliente.index');

//FORMULARIO DE CADASTRO
Route::get('/create-cliente', [ClienteController::class, 'create'])->name('cliente.create');

// MOSTRA RESULTADO
Route::get('/mostrar-cliente', [ClienteController::class, 'mostrar'])->name('cliente.mostrar');

// SALVA NO BANCO DE DADOS
Route::post('/store-cliente', [ClienteController::class, 'store'])->name('cliente.store');

// VISUALIZAR DADOS DE ACORDO COM ID
Route::get('/editar-cliente/{cliente}', [ClienteController::class, 'editar'])->name('cliente.editar');

// ATUALIZAR DADOS DE ACORDO COM ID NO BD
Route::put('/update-cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');

// EXCLUI DADOS DE ACORDO COM ID NO BD
Route::delete('/delete-cliente/{cliente}', [ClienteController::class, 'delete'])->name('cliente.delete');