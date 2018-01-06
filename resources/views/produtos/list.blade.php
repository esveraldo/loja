@extends('layouts.produtos')

@section('title', 'Listagem de produtos')

@section('content')

<h2>Listagem de produtos</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Valor</th>
      <th>Quantidade</th>
      <th>Tamanho</th>
      <th>Categoria</th>
      <th>Descrição</th>
      <th>Detalhes</th>
      <th>Adicionar</th>
      <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $produto)
      <tr class="{{ $produto->quantidade <= 1 ? 'danger' : '' }}">
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->valor }}</td>
        <td>{{ $produto->quantidade }}</td>
        <td>{{ $produto->tamanho }}</td>
        <td>{{ $produto->categoria->nome }}</td>
        <td>{{ $produto->descricao or 'Sem descrição' }}</td>
        <td style="text-align:center;"><a href="details/{{ $produto->id }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
        <td style="text-align:center;"><a href="new"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a></td>
        <td style="text-align:center;"><a href="destroy/{{ $produto->id }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@if(old('nome'))
<div class="alert alert-success">
  Produto {{old('nome')}} adicionado com sucesso.
</div>
@endif
@endsection
