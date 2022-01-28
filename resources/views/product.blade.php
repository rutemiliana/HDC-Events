@extends('layouts.main') <!--Linkankdo arquivos da pasta layouts, arquivo main-->

@section('title', 'Produto') 

@section('content')

    @if($id != null)
        <p>Exibindo id do produto: {{$id}}</p> {{--condicional baseada no que vem da URL--}}
    @endif

@endsection