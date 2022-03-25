@extends('layouts.main') <!--Linkankdo arquivos da pasta layouts, arquivo main-->

@section('title', 'Criar evento') 

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>
            Crie seu evento
        </h1>
        <form action="/events" method="POST" enctype="multipart/form-data"> {{--enctype é necessário para  enviar arquivos por meio do formulario html--}}
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" id="iamge" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"> 
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="title" name="date"> 
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento"> 
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0"> Não</option>
                    <option value="1"> Sim</option>
                </select> 
            </div>
            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="items">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja gratis"> Cerveja grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
                
                
                
            </div>

            
            <input type="submit" class="btn btn-primary" value="Criar evento">
        </form>
    </div>

@endsection