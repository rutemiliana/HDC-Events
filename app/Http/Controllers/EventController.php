<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index() { //rota principal da aplicação. uma action

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
    }


    public function create() {
        return view('events/create');
    }
}
