<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatos', function () {
    // return view('welcome');
    echo "OLá, Luiz!";
});

Route::get('/produtos', function () {
    // return view('welcome');
    echo "todos produtos";
});

// Variáveis de PATH
// Query string
Route::get('/produtos/{id}', function ($request) {
    // return view('welcome');
    echo "todos produtos";
    dd($request);
});

/**
 * PHP <versão atualizada>
 * Composer <gerenciar dependecias>
 * Node/Npm
 * TailwindCss
 * Banco de Dados
 * 
 * 
 * Laravel utiliza um pattern chamado de "Front Controller" junto ao padrão "MVC"
 * 
 */