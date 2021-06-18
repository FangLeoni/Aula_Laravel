@extends('eventos')
@section('create')
<h3>Cafastro do Aluno</h3>
@if(isset($errors) && count($errors)>0)
<div>
    @foreach($errors->all() as $erro)
        {{$erro}} <br>
    @endforeach
</div>
@endif
<div>
    <form name="formCad" id="formCad" method="post" action="{{url('aluno/store')}}">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br><br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade"><br><br>
        <label for="curso">Curso:</label>
        <input type="text" name="curso"><br><br>
        <label for="bolsa">Bolsa:</label>
        <input type="number" name="bolsa"><br><br>
        <label for="created_at">Criado em:</label>
        <input type="date" name="created_at" value="{{ $dateCad }}"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>
@stop

<!-- Criar as views, rotas e demais configurações para a tabela professor usando Laravel e MySQL
Criar views para Listar na tabela, Visualizar um registro e Cadastrar novo professor -->