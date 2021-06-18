@extends('eventos')
    @section('create')
    <h3>Cafastro do Professor</h3>
    @if(isset($errors) && count($errors)>0)
        <div>
            @foreach($errors->all() as $erro)
                {{$erro}} <br>
            @endforeach
        </div>
    @endif
    <div>
        <form name="formCad" id="formCad" method="post" action="{{url('professor/store')}}">
        @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome"><br><br>
            <label for="materia">Materia:</label>
            <input type="text" name="materia"><br><br>
            <label for="vl_hora_aula">Valor hora do Curso:</label>
            <input type="number" name="vl_hora_aula"><br><br>
            <label for="created_at">Criado em:</label>
            <input type="date" name="created_at" value="{{ $dateCad }}"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    @stop