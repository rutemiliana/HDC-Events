@extends('layouts.main')
@section('title', 'HDC')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos eventos<h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div id="card-col-md-3">
            <img src="/img/como-escolher-um-bom-curso-de-oratoria1.jpg" alt="{{ $event->title}}">
        </div>
        @endforeach

    </div>
</div>


<!--@foreach($events as $event) 
    <p>{{$event -> title}} -- {{$event -> description}} </p>

@endforeach-->
    

           
@endsection
   