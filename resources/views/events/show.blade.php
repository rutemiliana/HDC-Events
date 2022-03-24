@extends('layouts.main') <!--Linkankdo arquivos da pasta layouts, arquivo main-->

@section('title', 'Criar evento') 

@section('content')

    <div class="col-md-10 offset-md-1">

        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$event->city}}</p>
                <p class="event-participants"><ion-icon name="people-outline"></ion-icon> X participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Dono do evento</p>

            </div>
        </div>
    </div>


@endsection