@extends('eventos')
    @section('edit')
    <h3>Edição de {{ $professor->nome }} </h3>
    <div>
        <form name="formCad" id="formCad" method="post" action='{{url("professor/update/$professor->id")}}'>
        @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome"value="{{$professor->nome}}"><br><br>
            <label for="idade">Materia:</label>
            <input type="text" name="materia"value="{{$professor->materia}}"><br><br>
            <label for="curso">Valor da hora:</label>
            <input type="text" name="vl_hora_aula"value="{{$professor->vl_hora_aula}}"><br><br>
            <label for="created_at">Criado em:</label>
            <input type="date" name="created_at" value="{{$professor->created_at->format('Y-m-d')}}"><br><br>
            <input type="submit" value="Atualizar">
        </form>
    </div>
    @stop
