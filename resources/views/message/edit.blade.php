@extends('adminlte::page')

@section('title', 'Nico Business')

@section('content_header')
    <h1>Editar Uma Mensagem</h1>
@stop

@section('content')
   <form action="/messages/{{$message->id}}" method="POST">
   @csrf
   @method('PUT')
  <div class="mb-6">
    <label for="subject" class="form-label">Assunto</label>
    <input id="subject" name="subject" type="text" class="form-control" value="{{$message->subject}}" required>
  </div>
  <div class="mb-6" style="margin-bottom: 50px">
    <label for="message" class="form-label">Mensagem</label>
    <input id="message" name="message" type="text" class="form-control" value="{{$message->message}}" required>
  </div>
  <a href="/messages" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
<table id="clients" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">  <button type="submit" class="btn btn-success">Marcar Todos</button>

                 </th>
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
                @foreach ($messagesClient as $mess)
                    @if ($mess->client_id === $client->id)
                        @php
                            $flag = 1;
                            break;
                        @endphp
                    @else
                    @php
                    $flag = 0;
                    @endphp
                    @endif

                @endforeach
                @if ($flag)
    <input id='{{ $client->id }}' name='{{ $client->id }}' checked type="checkbox" class="form-control" tabindex="1">

                @else
    <input id='{{ $client->id }}' name='{{ $client->id }}' type="checkbox" class="form-control" tabindex="1">

                @endif

</td>
</form>

            <td>{{ $client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->phone}}</td>
            @if ($client->gender)
            <td>Masculino</td>
            @else
            <td>Feminino</td>
            @endif
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
