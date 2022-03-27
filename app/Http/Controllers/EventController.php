<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; //importanto a model Event
use App\Models\User;

class EventController extends Controller
{

    public function index() { //rota principal da aplicação. uma action

        //filtro de registro
        $search = request('search');

        //se tiver algo no campo search
        if($search){
            $events = Event::where([
                ['title' , 'like' ,'%' .$search.'%']
            ])->get();
        } else {
             $events = Event::all(); //está pegando todos os eventos do banco. model Event
        } 

       return view('welcome', ['events' => $events , 'search' =>  $search ]); 
    }


    public function create() {
        return view('events/create');
    }

    public function store(Request $request) {
       
        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
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

        //para ter acesso ao usuario logado
        $user = auth()->user();
        $event->user_id = $user->id;

        //salva o objeto
        $event->save();

        return redirect('/')->with('msg' , 'Evento criado com sucesso!');

    }

    public function show($id){
        $event = Event::findOrFail($id);

        /*-variavel para captar o usuário proprietario do evento
         -o método toArray() pega os dados que vem do objeto e transforma em array; -o método first() pega o primeiro que for encontrado na busca, evitando que compare todos os id com user_id
         obs.: a variavel não está funcionando, chamei direto na view
         */
        $eventOwner = User::where('id' ,  $event->user_id)->first()->toArray;

        return view('events.show' , ['event' => $event, 'eventOwner' => $eventOwner ]); // [mandando dados do evento para a view]

    }

    public function dashboard(){

        //variavel para acessar o usuario(user) logado(auth)
        $user = auth()->user();

        //variável para acessar o relacionamento(function events na model user) sem precisar do where
        $events = $user-> events;

        return view('events.dashboard' , ['events' => $events]);
    }

}
