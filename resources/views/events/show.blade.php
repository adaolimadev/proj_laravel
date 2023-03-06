@extends('layouts.main')

@section ('tittle', $event->title)

@section('content')


<div class="container bg-light mt-4 p-4 rounded ">
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/public/img/events/{{ $event->image}}" class="img-fluid" alt="{{ $event->title}}">    
            </div>  
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title}}</h1>
                <p class="event-city"> <ion-icon name="location-outline"> </ion-icon> {{ $event->city}}</p>
                <p class="events-participants"> <ion-icon name="people-outline"></ion-icon> X Participantes</p>
                <p class="event-owner"> <ion-icon name="star-outline"></ion-icon> Dono do evento</p>
                <h3 class="mt-3">O Evento inlcui: </h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                    <li> <ion-icon name="play-outline"></ion-icon> <span>{{ $item}}</span></li>
                    @endforeach
                </ul>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
            </div>      
             <div class="col-md-12" id="description-container">
                <h3>Sobre o Evento: </h3>
                <p class="event-description">{{$event->description}}</p>
             </div>
        </div>
    </div>
</div>
@endsection