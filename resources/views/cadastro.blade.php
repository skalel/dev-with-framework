@extends('layouts.app')

@section('content')
<div class="row align-items-left alterPage">
  <a href="/painel/inscritos">Veja os inscritos</a>
</div>

<h1 class="mb-5 text-center ">Efetue seu cadastro</h1>

  @if (session()->has('success'))

  <div class="alert alert-success">

      {{ session('success') }}

  </div>

@endif

  <div>
  <form action="/cadastro/participante" class="mb-3 row col-4 center" method="post">
    @csrf
  <div class="mb-3 form-group col-12">
    <label class="form-label col-12" for="nome">Nome:</label>
    <input class="col-12"type="text" name="nome" id="nome" placeholder="Digite seu primeiro nome...">
    @error('nome')
      <span class="text-danger col-12">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3 form-group col-12">
    <label class="form-label col-12" for="sobrenome">Sobrenome:</label>
    <input class="col-12"type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome...">
    @error('sobrenome')
      <span class="text-danger col-12">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3 form-group col-12">
    <label class="form-label col-12" for="email">Endereço de e-mail:</label>
    <input class="col-12"type="email" name="email" id="email" placeholder="Digite seu e-mail...">
    @error('email')
      <span class="text-danger col-12">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3 form-group col-12">
    <label class="form-label col-12" for="data_nascimento">Data de Nascimento:</label>
    <input class="col-12"type="date" name="data_nascimento" id="data_nascimento" placeholder="Data de Nascimento..." value="">
    @error('data_nascimento')
      <span class="text-danger col-12">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3 form-group col-12">
    <label class="form-label col-12" for="endereco">Endereço:</label>
    <input class="col-12"type="text" name="endereco" id="endereco" placeholder="Digite seu endereço...">
  </div>
  <button class="btn btn-primary" type="submit" value="Submit">Enviar</button>
  </form>
</div>
@endsection
