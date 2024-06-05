@extends('layouts.main')

@section('title','HDC Events')

@section('content')

    <div id='search-container' class="col-md-12">

        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar ...">
        </form>

    </div>
    <div id="events-container" class="col-md-12">
        <h2>Proximos eventos</h2>
        <p class="subtitle">Veja os proximos eventos</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
                @php
                 $image="";
                @endphp

                @if($event->image=='')
                    @php 
                        $image="/img/image1.jpg"
                    @endphp
                    
                @else   
                    @php 
                        $image="/img/events/".$event->image;
                    @endphp
                @endif
                <div id="cardd" class="card col-md-3">
                    <img src="{{$image}}" alt="{{$event->title}}">
                    <div class="card-body">   
                       
                        <p class="card-date">{{ date('d/m/y',strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{$event->title}} </h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
            @if(count($events)==0)
                <p>Não há eventos disponiveis</p>
            @endif
        </div>
    </div>

@endsection