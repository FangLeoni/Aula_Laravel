@extends('eventos')
    @section('registro')
    <h2>Alunos cadastrados </h2>
        <div>
            <a href="{{url('aluno/create')}}">
                <button>Cadastrar</button>
            </a>
            @csrf
            <table>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Bolsa R$</th>
                        <th scope="col">Inclusão</th>
                        <th scope="col">Atualização</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                    <tr>
                        <th scope="row"> {{$aluno->id}} </th>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->idade}}</td>
                        <td>{{$aluno->curso}}</td>
                        <td>{{$aluno->bolsa}}</td>
                        <td>{{$aluno->created_at}}</td>
                        <td>{{$aluno->updated_at}}</td>
                        <td>
                            <a href='{{url("aluno/$aluno->id")}}'>
                                <button>Visualizar</button>
                            </a>
                        </td>
                        <td>
                            <a href='{{url("aluno/edit/$aluno->id")}}'>
                                <button>Editar</button>
                            </a>
                        </td>
                        <td>
                            <a href='{{url("aluno/delete/$aluno->id")}}' class="js_del">
                                <button>Deletar</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $alunos->appends(['sort' => 'id'])->links() }}
        </div> 
    @stop


