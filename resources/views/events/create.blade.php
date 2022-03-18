@extends('layouts.main')

@section('title', 'Criar consulta')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Exame</h1>
    <form action="/events" method="GET">
       @csrf
    <div class="form-group">
        <label for="title">Nome do Exame</label>
         <input type="text" class="form-control" id="nome_consulta" name="nome_consulta" placeholder="Nome da Consulta">
    </div>    
    <div class="form-group">
        <label for="title">Nome do Especialista</label>
         <input type="text" class="form-control" id="nome_especialista" name="nome_especialista" placeholder="Nome do Especialista">
      </div>

      <div class="form-group">
        <label for="date">Data do Exame</label>
         <input type="date" class="form-control" id="date" name="date" >
    </div>
     
      <div class="form-group">
        <label for="title">O Exame é Particular?</label>
         <select name="private" id="private" class="form-control" >
         <option value="0">Não</option>
         <option value="1">Sim</option>
         </select>
       </div>
         <div class="form-group">
        <label for="title">Descrição do Exame</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que acontece nesse exame?"></textarea>
        </div>
        <div class="form-group">
        <label for="title">Adicine itens de condição Crônicas</label>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Hipertensão"> Hipertensão
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Diabetes"> Diabetes
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Colesterol"> Colesterol
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Bronquite"> Bronquite
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Asma"> Asma
          </div>
        </div>
        
         <input type="submit" class="btn btn-primary " value="Criar Exame">
      
    </form> 
</div>
@endsection