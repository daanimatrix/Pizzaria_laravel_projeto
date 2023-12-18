@extends('layouts.main')      

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->image }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"> <ion-icon name="location-outline"></ion-icon> Filial: {{$event->city}}</p>
                <!-- <p class="events-participants"><ion-icon name="people-outline"></ion-icon> x Participants</p> -->
                <!-- <p class="events-owner"><ion-icon name="star-outline"></ion-icon>  Dono do Evento</p> -->
                <p class="event-price" style="font: size 40px;">R$: {{$event->price}}</p>


                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>  
                <h3>A pizza apresenta ingredientes exclusivos da nossa franquia: </h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon> <span> {{ $item }}</span> </li>
                    @endforeach
                </ul>
          
                
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre a pizza:</h3>
                <p class="event-description"> {{ $event->description }}</p>
            </div>
        </div>
    </div>


@endsection