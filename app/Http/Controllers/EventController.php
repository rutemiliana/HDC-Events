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

    public function store(Request $request) {
       
        $event = new Event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        //image upload
        // se o pedido tem um arquivo 'image' e se o arquivo é válido
        if($request->hasFile('image') && $request-> file('image')->isValid())
        {
            $requestImage = $request->image;

            //pega a extensao da imagem
            $extension = $requestImage->extension();

            //pega o nome da imagem original e criam uma string unica com um nome e hora. Salva no banco
            $imageName= md5($requestImage->getClientOriginalName(). strtotime("now")) . "." . $extension ;

            //salva a imagem na pasta/servidor
            $requestImage->move(public_path('img/events'), $imageName);

            //salvar no banco de vdd
            $event->image = $imageName;

        }

        //salva o objeto
        $event->save();

        return redirect('/')->with('msg' , 'Evento criado com sucesso!');

    }
}
