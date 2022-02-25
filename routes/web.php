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
Route::post('/events', [EventController::class , 'store']); //dentro da classe, chame ese metodo
Route::post('/events', [EventController::class , 'show']);
Route::get('/contact');



