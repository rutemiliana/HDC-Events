<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController; //importando
use App\Http\Controllers\ContactController;

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

Route::get('/', [EventController::class, 'index'] );//vai usar a action (funcao) index da classe EventController
Route::get('/events/create', [EventController::class , 'create'])->middleware('auth'); //dentro da classe, chame ese metodo. middleware serve para dar acesso a somente quem tiver logado
Route::get('/events/{id}', [EventController::class , 'show']);
Route::post('/events', [EventController::class , 'store']); //dentro da classe, chame ese metodo
//Route::post('/events', [EventController::class , 'show']);
Route::get('/contact');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
