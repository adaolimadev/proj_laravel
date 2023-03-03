@extends('layouts.main')

@section ('tittle', 'Produto')

@section('content')

<div class="container bg-light mt-4 p-4 rounded ">

    <h1 class="text-center">Criar novo evento</h1>

    <div id="event-create-container" class="col-md-6 offset-md-3">

        <form action="/proj_laravel/example-app/public/events" method="post">
            @csrf
        <div class="form-group mt-2">
            <label for="title">Evento: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group mt-2">
            <label for="title">Cidade: </label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento">
        </div>
        <div class="form-group mt-2">
            <label for="title">Evento privado?: </label>
            <select name="private" id="private" class="form-control">
                <option class="form-control" value="0">Não</option>
                <option class="form-control" value="1">Sim</option>
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="title">Descrição: </label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="2"></textarea>
        </div>
        <input type="submit" class="btn btn-primary mt-3" value="Criar Evento">

        </form>
    </div>    
</div>    
@endsection