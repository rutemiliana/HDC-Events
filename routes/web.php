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

use App\Http\Controllers\EventController; //importando
use App\Http\Controllers\ContactController;

Route::get('/', [EventController::class, 'index'] );//vai usar a action (funcao) index da classe EventController
Route::get('/events/create', [EventController::class , 'create']); //dentro da classe, chame ese metodo

Route::get('/contact');

Route::get('/produtos', function () { //{o que ta dentro da chave parametro}

    $busca = request('search'); //método request resgata os parametros que vem como query string
    
    return view('products' , ['busca' => $busca]);

});

Route::get('/product_teste/{id?}', function ($id = null) { //{o que ta dentro da chaveé parametro}
    return view('product', ['id' => $id]); //manda o id pra view
});

