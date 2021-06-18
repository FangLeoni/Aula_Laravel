@extends('eventos')
    @section('registro')
    <h2>Professores cadastrados </h2>
        <div>
            <a href="{{url('professor/create')}}">
                <button>Cadastrar</button>
            </a>
            @csrf
            <table>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Matéria</th>
                        <th scope="col">Valor da Hora</th>
                        <th scope="col">Inclusão</th>
                        <th scope="col">Atualização</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professor as $professores)
                    <tr>
                        <th scope="row"> {{$professores->id}} </th>
                        <td>{{$professores->nome}}</td>
                        <td>{{$professores->materia}}</td>
                        <td>{{$professores->vl_hora_aula}}</td>
                        <td>{{$professores->created_at}}</td>
                        <td>{{$professores->updated_at}}</td>
                        <td>
                            <a href='{{url("professor/$professores->id")}}'>
                                <button>Visualizar</button>
                            </a>
                        </td>
                        <td>
                            <a href='{{url("professor/edit/$professores->id")}}'>
                                <button>Editar</button>
                            </a>
                        </td>
                        <td>
                            <a href='{{url("professor/delete/$professores->id")}}' class="js_del">
                                <button>Deletar</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @stop





