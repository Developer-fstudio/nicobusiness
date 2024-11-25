@extends('adminlte::page')

@section('title', 'NicoBusiness')

@section('content_header')
   <h1>Criar Novo Mensagem</h1>
@stop

@section('content')

<form action="/messages" method="POST">
  @csrf
  <div class="mb-6">
    <label for="subject" class="form-label">Assunto</label>
    <input id="subject" name="subject" type="text" class="form-control" tabindex="1" required>
  </div>
  <div class="mb-6" style="margin-bottom: 50px">
    <label for="message" class="form-label">Mensagem</label>
    <input id="message" name="message" type="text" class="form-control" tabindex="2" required>
  </div>
  <a href="/messages" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  <hr>
<h2>Selecione os Clientes para receberem a mensagem</h2>
<table id="clients" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Enviar</th>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telemovel</th>
            <th scope="col">Género</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>

    <input id='{{ $client->id }}' name='{{ $client->id }}' type="checkbox" class="form-control" tabindex="1">
</form>

            </td>
            <td>{{ $client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->gener}}</td>
            <td>
                <form action="{{ route ('clients.destroy',$client->id)}}" method="POST">
                <a href="/clients/{{ $client->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
