@extends('layouts.main')

@section ('tittle', 'Editar Evento')

@section('content')

<div class="container text-white mt-4 p-4 rounded ">

    <h1 class="text-center">Editar evento: {{ $event->title }}</h1>

    <div id="event-create-container" class="col-md-6 offset-md-3">

        <form action="/public/events/update/{{$event->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="title">Evento: </label>
                <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}">
            </div>
            <div class="form-group mt-3">
                <label for="title">Data do evento: </label>
                <input type="date" class="form-control" id="date" name="date" value="{{ date('Y-m-d', strtotime($event->date))}}" >
            </div>
            <div class="form-group mt-3">
                <label for="title">Cidade: </label>
                <input type="text" class="form-control" id="city" name="city" value="{{$event->city}}">
            </div>
            <div class="form-group mt-3">
                <label for="title">Evento privado?: </label>
                <select name="private" id="private" class="form-control">
                    <option class="form-control" value="0">Não</option>
                    <option class="form-control" value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
                </select>
            </div>
            <div class="form-group mt-3">
                <label for="title">Descrição: </label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="2" >{{$event->description}}</textarea>
            </div>
            <div class="form-group mt-3">
                <label for="title">Adicione itens de insfraestrutura: </label>
                <div class="form-group">
                    <input type="checkbox" name="items[]"   value="Open Bar">Open Bar
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]"   value="Backstage">Backstage
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]"   value="Area Vip">Area Vip
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]"   value="Meia Entrada">Meia Entrada
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]"   value="Meia Entrada">Area Descanso
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="image">Imagem Atual do Evento: </label><br>
               
                <img src="/public/img/events/{{ $event->image}}" alt="" class="img-preview">

            </div>
            <div class="form-group mt-3">
                <label for="image">Alterar Imagem do Evento: </label><br>
                <input type="file" class="form-control-image mt-2" id="image" name="image" >
            </div>
            <input type="submit" class="btn btn-primary mt-4" value="Editar Evento">
            <a href="{{url('/')}}" class="btn btn-danger mt-4">Cancelar</a>
        </form>

    </div>    
</div>    
@endsection