@extends('layouts.app')

@section('content')

<div class="row align-items-left alterPage">
  <a href="/cadastro/participante">Cadastre-se!</a>
</div>

<h1 class="mb-5 text-center ">Participantes cadastrados</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Endereço</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($participantes as $participante)

        <tr>
            <td>{{ $participante->id }}</td>
            <td>{{ $participante->nome }}</td>
            <td>{{ $participante->sobrenome }}</td>
            <td>{{ $participante->email }}</td>
            <td>{{ $participante->data_nascimento }}</td>
            <td>{{ $participante->endereco }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

{{ $participantes->links() }}

@endsection
