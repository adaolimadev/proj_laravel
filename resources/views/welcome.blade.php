@extends('layouts.main')

@section ('tittle', 'Pagina Inicial')

@section('content')
    
<div class="container bg-light mt-4 p-4 rounded ">
    <div id="search-container" class="col-md-12">
        <h1 class="">Buscar Evento</h1>
        <form action="/public/" class="" method="GET">
            <input type="text" name="search" id="search" class="form-control mb-4" placeholder="Procurar..">
        </form>
    </div>
</div>
<div class="container bg-light mt-4 p-4 rounded">
    <div id="events-container" class="col-md-12 mt-4">
       @if($search)
       <h1>Resultados da busca: {{$search}}</h1>
       @else
       <h3>Eventos dos próximos dias:</h3>
       @endif
        
        <div id="cards-container" class="row">
            @foreach ($events as $e)
                <div class="card col-md-3">
                    <img id="img-card" src="/public/img/events/{{ $e->image}}" alt="{{ $e->title }}">
                    <div class="card-body">
                        <p class="card-date"> {{date('d/m/Y', strtotime($e->date))}}</p>
                        <h5 class="card-title">{{ $e->title}}</h5>
                        <p class="card-description">{{ $e->description}}</p>
                        <p class="card-participants">X Participantes</p>
                        <a href="/public/events/{{$e->id}}" class="btn btn-primary">Saber Mais</a>
                    </div>
                </div>
            @endforeach
            @if(count($events) == 0)
            <p>Não há eventos disponíveis no momento.</p>
            @endif
        </div>
    </div>
</div>
@endsection
  