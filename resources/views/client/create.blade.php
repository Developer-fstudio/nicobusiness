@extends('adminlte::page')

@section('title', 'NicoBusiness')

@section('content_header')
   <h1>Criar Novo Cliente</h1>
@stop

@section('content')

<form action="/clients" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input id="name" name="name" type="text" class="form-control" tabindex="1" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Telemovel</label>
    <input id="phone" name="phone" type="text" class="form-control" tabindex="2" required>
  </div>
  <div class="mb-3">
    <label for="dataNascimento" class="form-label">Data de Nascimento</label>
    <input type='date' name="dataNascimento" class="form-control" id='dataNascimento' required>
  </div>
  <div class="mb-3">
      <label for="gernder">Genero</label>
    <select class="form-control" name="gender" id="gender">
      <option id="gender" value="0">Feminino</option>
      <option id="gender" value="1">Masculino</option>
    </select>
  </div>
  <a href="/clients" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- maneira de tirar o Please fill out this field -->
    <script>
      $(document).ready(function () {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                switch (e.srcElement.id) {
                    case "name":
                        e.target.setCustomValidity("Prencha o Nome do cliente");
                        break;
                    case "phone":
                        e.target.setCustomValidity("Prencha o Telemovel do cliente");
                        break;
                }
            }
        };
        elements[i].oninput = function (e) {
            e.target.setCustomValidity("");
        };
    }
})
    </script>
@stop
