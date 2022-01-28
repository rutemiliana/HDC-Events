@extends('layouts.main')
@section('title', 'HDC')
@section('content')
    
{{--
        <h1>algum titulo</h1>
            @if(10>5)
                <p> a condição é verdadeira</p>
            @endif

                <p> {{$nome}} </p>

            @if($nome=="Irineu")
                <p> O nome é irineu</p>
            @elseif($nome == "Rute")
                <p>O nome é Rute ok</p>
            @else 
                <p>O nome é Rute {{$nome}} e tem {{$idade}} anos</p>
            @endif

            @for($i = 0 ; $i < count($arr) ; $i++)
                <p>{{ $arr[$i] }} - {{ $i }}</p>
                @if($i == 2)
                <p>O i é {{ $i }}</p>
                @endif
            @endfor
            
            @foreach($nomes as $ok)
                <p> {{$loop -> index}}</p> 
                <p> {{ $ok }}</p>
            @endforeach
            <!--contário html -->
            {{--comentario blade--}}
           
        @endsection
   