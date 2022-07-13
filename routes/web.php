<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Onde eu vou fazer as minhas rotas
|
*/

Route::get('/', function () {
    $subMensage = 'Meu primeiro template Blade';
    
    return view('hello', compact('subMensage'));
});