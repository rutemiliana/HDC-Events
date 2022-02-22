<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; //importanto a model Event

class EventController extends Controller
{

    public function index() { //rota principal da aplicação. uma action

        $events = Event::all(); //está pegando todos os eventos do banco. model Event
        return view('welcome', ['events' => $events]); 
    }


    public function create() {
        return view('events/create');
    }
}
