@extends('layouts.main') <!--Linkankdo arquivos da pasta layouts, arquivo main-->

@section('title', 'Produtos')

@section('content')
    <h1>Página de produtos</h1>
    <a href="/"> Voltar página inicial</a>

    @if($busca != '')
        <p>O usuário está buscando por: {{$busca}}</p>
    @endif
@endsection