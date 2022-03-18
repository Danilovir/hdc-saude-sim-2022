@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
        
        </div>
        <div id="info-container" class="col-md6">
          
            <p cllas="event-city"><ion-icon name="lacation-outline"> {{ $event->nome_especialista }}</ion-icon></p>

            <div class="col-md-12" id="description-container">
                <h3>sobre a Consulta</h3>
                <p class="event-descrption"> {{ $event->nome_consulta }}</p>
                <p class="event-descrption"> {{ $event->description }}</p>
                <a href="#" class="btn btn-primary" id="event-submit">Agendar Consulta</a>
                <h3>É Necessario Fazer exemas de:</h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                    <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description container">
                <h3>Sobre o Exame:</h3>
                <p class="event-descrption">{{ $event->description}}</p>
            </div>
        </div>
    </div>
</div>




@endsection