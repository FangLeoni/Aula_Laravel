@extends('eventos')
    @section('registro')
        <h3>Visualizar</h3>
        <div>
        Id: {{$professor->id}}<br>
        Nome: {{$professor->nome}}<br>
        materia: {{$professor->materia}}<br>
        Valor hora da aula: {{$professor->vl_hora_aula}}<br> 
        </div>
    @stop