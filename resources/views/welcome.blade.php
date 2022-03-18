@extends('layouts.main')

@section('title', 'Sáude Sim')

@section('content')
   
   <div id="search-container" class="col-md-12">

   <h1>Busque um Exame</h1>
   <form action="/" method="GET">
       <input type="text" name="search" id="search" class="form-control" placeholder="Buscar">
   </form>
   </div>

   <div id="consultas-container" class="col-md-12">

   @if($search)
   <h2>Buscando por: {{  $search }}</h2>
   @else
   <p class="subtitle">Vejá todas as sua consultas</p>
   @endif
  
   <div id="cards-container" class="row">
   @foreach($consultas as $consulta)
    <div class="card col-md-3"></div>
    
    <div class="card-body">
    <p class="card-date">{{ date('d/m/Y', strtotime($consulta->date)) }}</p>
    <h5 class="card-nome_consulta">{{ $consulta->nome_consulta }}</h5>
    <h5 class="card-participantes">{{ $consulta->nome_especialista }}</h5>
    <a href="/events/{{ $consulta->id }}" class="btn btn-primary">Saiba mais</a>
   </div>
   </div>
   @endforeach

   @if(count($consultas) == 0 && $search)
        <p>Não Foi Possível Buscar Nenhum Exame com {{ $search }}! <a href="/">Ver Todos</a> </p>
        @elseif(count($consultas) == 0)  
        <p>Não há Exames Disponiveis</p>
    @endif  
</div>
</div>
 @endsection