<?php

use App\Http\Controllers\Jv\JvController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [JvController::class, 'clientes']);
