@extends('layouts.main')
@section('title', 'HDC')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    {{--se tiver algo na busca--}}
    @if($search)
        <h2>Bruscando por:  {{$search}}</h2>
    @else
        <h2>Próximos eventos<h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif
    
    <div id="cards-container" class="row">
        @foreach($events as $index=>$event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event-> image }}" class="" alt="{{ $event->title}}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y') , strtotime($event->date) }}</p>
                <h5 class="card-title">{{ $event->title}}</h5>
                <p class="card-participants"> X participlantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }} ! <a href="/"> Ver todos os eventos</a> </p>
        @elseif(count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>


{{--@foreach($events as $event) 
    <p>{{$event -> title}} -- {{$event -> description}} </p>
@endforeach--}}
    

           
@endsection
   