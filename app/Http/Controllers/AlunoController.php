<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\AlunoModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    private $objAluno;
    //Construtor
    public function __construct()
    {
        $this->objAluno = new AlunoModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $alunos=$this->objAluno;
        // $alunos = $this->objAluno->sortBy('id');
        // $alunos = $this->objAluno->paginate(3)->sortBy('id');

        // return view('aluno', compact('alunos'));
        return view('aluno', [
            'alunos' => $this->objAluno->paginate(3)
        ]);

        // return $aluno;
        // dd($aluno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dateCad = Carbon::now()->format('Y-m-d');
        return view('createAluno', compact('dateCad'));
        // return view('createAluno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        $this->objAluno->create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'curso' => $request->curso,
            'bolsa' => $request->bolsa,
            'created_at' => $request->created_at
        ]);
        return redirect('aluno'); //Indica para qual página ir após a operação executada
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = $this->objAluno->find($id);
        return view('showAluno', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = $this->objAluno->find($id);

        return view('editAluno', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objAluno->where(['id' => $id])->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'curso' => $request->curso,
            'bolsa' => $request->bolsa,
            'created_at' => $request->created_at
        ]);
        //redireciono para a view dos alunos
        return redirect('aluno');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objAluno->destroy($id);

        // redirecionamento para a view aluno
        return redirect('aluno');
    }
}
