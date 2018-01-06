@extends('layouts.produtos')

@section('title', 'Cadastrar novo produto')

@section('content')

<h2>Cadastrar novo produto</h2>
@if($errors->all())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form class="" action="create" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" value="">
  </div>
  <div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" name="valor" value="">
  </div>
  <div class="form-group">
    <label for="quantidade">Quantidade</label>
    <input type="text" class="form-control" name="quantidade" value="">
  </div>
  <div class="form-group">
    <label for="tamanho">Tamanho</label>
    <input type="text" class="form-control" name="tamanho" value="">
  </div>
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <select class="form-control" name="categoria_id">
      <optgroup label="Escolha sua categoria">
        @foreach($categorias as $categoria)
          <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
        @endforeach
      </optgroup>
    </select>
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" class="form-control" rows="8" cols="80"></textarea>
  </div>
  <button type="submit" class="btn btn-default" name="button">Gravar novo produto</button>
</form>

@endsection
