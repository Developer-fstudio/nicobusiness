@extends('adminlte::page')

@section('title', 'Nico Business')

@section('content_header')
    <h1>Lista de Mensagens</h1>
@stop

@section('content')
   <a href="messages/create" class="btn btn-primary mb-3">Criar</a>

<table id="messages" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Assunto</th>
            <th scope="col">Mensagem</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
        <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->subject}}</td>
            <td>{{$message->message}}</td>
            <td>
            <a href="/sendMessageTwilio/{{ $message->id}}" class="btn btn-danger">Enviar Pelo Twilio</a>
            <a href="/sendMessageExpress/{{ $message->id}}" class="btn btn-primary">Enviar Pelo SMS Express</a>
            <hr>
                <form action="{{ route ('messages.destroy',$message->id)}}" method="POST">
                

                <a href="/messages/{{ $message->id}}/edit" class="btn btn-info">Editar</a>
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
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#messages').DataTable({
        "lengthMenu": [[5,10, 50,100,200,300,400,500, -1], [5, 10, 50,100,200,300,400,500, "All"]]
    });
} );
</script>

@stop
