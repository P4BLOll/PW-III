@extends('layouts.estrutura')

@section('titulo', "Contato")

@section('container')

<div class="container-fluid">
<div class="row text-center align-items-center justify-content-center" style="height: 500px; background-image: url('imgs/7207a45676cc937dbc8c446bc911e0a1-photoaidcom-darken.jpg'); background-size: cover;">
<p class="fs-1">CONTATO</p>
</div>


<hr class="featurette-divider" style="margin: 4rem 0 4rem 0;">


  <div class="container marketing">

<div class="row  align-items-center justify-content-center">
<div class="col-4">

<form action="{{ route('contato')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Telefone</label>
    <input type="text" name="telefone" id="telefone" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Endereço</label>
    <input type="text" name="endereco" id="endereco" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="input-group mb-3">
  <select class="form-select" name="sexo" id="sexo" aria-label="Example select with button addon">
    <option selected>Sexo</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Outro">Outro</option>
  </select>
</div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
</div>
    <hr class="featurette-divider" style="margin: 4rem 0 4rem 0;">

  </div>
  </div>

@endsection