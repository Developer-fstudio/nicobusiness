@extends('adminlte::page')

@section('title', 'Nico Business')

@section('content_header')
    <h1>Empresa {{$empresa->name}}</h1>
    <hr>
@stop

@section('content')
  <h4>Definições Gerais</h4>
  <hr>
   <form action="/empresa/{{$empresa->id}}" method="POST">
   @csrf
   @method('PUT')
  <div class="mb-4">
    <label for="name" class="form-label">Nome</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$empresa->name}}">
  </div>
  <div class="mb-4">
    <label for="email" class="form-label">email</label>
    <input id="email" name="email" type="text" class="form-control" value="{{$empresa->email}}">
  </div>
  <div class="mb-4">
    <label for="NIF" class="form-label">NIF</label>
    <input id="NIF" name="NIF" type="text" class="form-control" value="{{$empresa->NIF}}">
  </div>  
  <hr>
  <h4>Definições de envio de Mensagens (Serviços)</h4>
  <hr>

  <h5>Twilio</h5>
  <hr>
  <div class="mb-4">
    <label for="TwilioAccountPhone" class="form-label">Twilio Phone Number</label>
    <input id="TwilioAccountPhone" name="TwilioAccountPhone" type="text" class="form-control" value="{{$empresa->TwilioAccountPhone}}">
  </div>
  <div class="mb-4">
    <label for="TwilioAccountID" class="form-label">Twilio Account ID</label>
    <input id="TwilioAccountID" name="TwilioAccountID" type="text" class="form-control" value="{{$empresa->TwilioAccountID}}">
  </div>  
  <div class="mb-4">
    <label for="TwilioAccountSecret" class="form-label">Twilio Account Secret</label>
    <input id="TwilioAccountSecret" name="TwilioAccountSecret" type="password" class="form-control" value="{{$empresa->TwilioAccountSecret}}">
  </div>
  <hr>

  <h5>Altice</h5>
  <hr>  
  <div class="mb-4">
    <label for="AlticeUrlApi" class="form-label">Altice Api Url</label>
    <input id="AlticeUrlApi" name="AlticeUrlApi" type="text" class="form-control" value="{{$empresa->AlticeUrlApi}}">
  </div>  
  <div class="mb-4">
    <label for="AlticeAccountID" class="form-label">Altice Account ID</label>
    <input id="AlticeAccountID" name="AlticeAccountID" type="text" class="form-control" value="{{$empresa->AlticeAccountID}}">
  </div>  
  <div class="mb-4">
    <label for="AlticeAccountSecret" class="form-label">Altice Account Secret</label>
    <input id="AlticeAccountSecret" name="AlticeAccountSecret" type="password" class="form-control" value="{{$empresa->AlticeAccountSecret}}">
  </div>
  <hr>

  <a href="javascript:history.back()" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>  
</form>
<hr>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

