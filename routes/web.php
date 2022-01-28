<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {//onde o usuario acessa
    $nome = "Rute";
    $idade = 12;
    
    $arr = [1,2,3,4,5];

    $nomes = ["Kiko" , "lindo " , "kk", "nometop, certo"];

    return view('welcome', 
        [
            'nome' => $nome ,
            'idade' => $idade,
            'arr' => $arr,
            'nomes' => $nomes,

        ]); //tela que vai ter
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () { //{o que ta dentro da chave parametro}
    $busca = request('search'); //método request resgata os parametros que vem como query string
    return view('products' , ['busca' => $busca]);

});

Route::get('/product_teste/{id?}', function ($id = null) { //{o que ta dentro da chaveé parametro}
    return view('product', ['id' => $id]); //manda o id pra view
});

