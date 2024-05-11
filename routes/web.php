<?php

use Illuminate\Support\Facades\Route;


Route::get('/inicio', function () {

    $nome = "Rafael";
    $idade = 19;
    $profissao = "Desenvolvedor";
    $arr = [10, 20, 30, 40,     50];
    $nomes = ["Rafael" , "Taina", "Guilherme", "Nicolas", "Daniel"];

    return view('welcome', 
    [
        'nome' => $nome,
        'idade' => $idade, 
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});