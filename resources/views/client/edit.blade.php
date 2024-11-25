@extends('adminlte::page')

@section('title', 'Nico Business')

@section('content_header')
    <h1>Editar Um Cliente</h1>
@stop

@section('content')
   <form action="/clients/{{$client->id}}" method="POST">
   @csrf
   @method('PUT')
  <div class="mb-4">
    <label for="name" class="form-label">Nome</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$client->name}}" required>
  </div>
  <div class="mb-4">
    <label for="phone" class="form-label">Telefone</label>
    <input id="phone" name="phone" type="text" class="form-control" value="{{$client->phone}}" required>
  </div>  
  <div class="mb-4">
    <label for="dataNascimento" class="form-label">Data de Nascimento</label>
    <input type='date' name="dataNascimento" class="form-control" id='dataNascimento' value="{{$client->dataNascimento}}" required>
  </div>
  <div class="mb-4">
    <label for="gernder">Example select</label>
  <select class="form-control" name="gender" id="gender">
      @if ($client->gender === 0)
        <option id="gender" value="0">Feminino</option>
        <option id="gender" value="1">Masculino</option>
      @else
      <option id="gender" value="1">Masculino</option>
      <option id="gender" value="0">Feminino</option>
      @endif
  </select>
</div>
  <a href="/clients" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
