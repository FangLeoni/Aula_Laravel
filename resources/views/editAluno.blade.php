@extends('eventos')
    @section('edit')
    <h3>Edição de {{ $aluno->nome }} </h3>
    <div>
        <form name="formCad" id="formCad" method="post" action='{{url("aluno/update/$aluno->id")}}'>
        @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome"value="{{$aluno->nome}}"><br><br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade"value="{{$aluno->idade}}"><br><br>
            <label for="curso">Curso:</label>
            <input type="text" name="curso"value="{{$aluno->curso}}"><br><br>
            <label for="bolsa">Bolsa:</label>
            <input type="number" name="bolsa"value="{{$aluno->bolsa}}"><br><br>
            <label for="created_at">Criado em:</label>
            <input type="date" name="created_at" value="{{$aluno->updated_at->format('Y-m-d')}}"><br><br>
            <input type="submit" value="Atualizar">
        </form>
    </div>
    @stop
