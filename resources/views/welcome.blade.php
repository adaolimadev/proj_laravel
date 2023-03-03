@extends('layouts.main')

@section ('tittle', 'Pagina Inicial')

@section('content')
    
<div class="container bg-light mt-4 p-4 rounded ">
    <div id="search-container" class="col-md-12">
        <h1 class="">Buscar Evento</h1>
        <form action="" class="">
            <input type="text" name="search" id="search" class="form-control mb-4" placeholder="Procurar..">
        </form>
    </div>
</div>
<div class="container bg-light mt-4 p-4 rounded">
    <div id="events-container" class="col-md-12 mt-4">
        <h1>Próximos eventos</h1>
            Veja os Eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $e)
                <div class="card col-md-3">
                    <img id="img-card" src="/proj_laravel/example-app/public/img/{{ $e->title }}.jpeg" alt="{{ $e->title }}">
                    <div class="card-body">
                        <p class="card-date"> 10/03/2023</p>
                        <h5 class="card-title">{{ $e->title}}</h5>
                        <p class="card-description">{{ $e->description}}</p>
                        <p class="card-participants">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber Mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
  