@extends('layouts.main')

@section('title',$event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{ $event->title }}">
                <div class="col-md-12" styles="margin-top: 10px;" id="description-container">
                    <h3  >Sobre Evento:</h3>
                    <p class="event-description">
                        {{$event->description}}
                    </p>
                </div>
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{$event->city}} </p>
                <p class="event-participants"><ion-icon name="people-outline"></ion-icon> {{count($event->users)}} Participantes </p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>{{$eventOwner['name']}}</p>
                @if($hasUserJoined==false)
                <form action="/events/join/{{ $event->id}}" method="POST">
                    @csrf
                    <a href="/events/join/{{ $event->id}}"
                    styles="margin-bottom: 10px;" 
                    id="event-submit" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();
                    "
                    class="btn btn-primary"
                    >
                        Confirmar Presença
                    </a>
                </form>
                @else
                    <p class='already-joined-msg'>Você já está participando deste evento</p>
                @endif

                
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                @if($event->items!="")    
                @foreach($event->items as $item)
                    <li><ion-icon name='play-out'></ion-icon><span>{{$item}}</span></li>
                @endforeach
                @endif
                </ul>
            </div>
        </div>
    </div>


@endsection()