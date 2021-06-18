<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Models\ProfessorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{

    private $objProfessor;
    //Construtor
    public function __construct(){
        $this->objProfessor=new ProfessorModel();        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professor=$this->objProfessor->all();
        return view('professor', compact('professor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dateCad = Carbon::now()->format('Y-m-d');
        return view('createprofessor', compact('dateCad'));
        return view('createProfessor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfessorRequest $request)
    {
        $this->objProfessor->create([
            'nome'=>$request->nome,
            'materia'=>$request->materia,
            'vl_hora_aula'=>$request->vl_hora_aula,
            'created_at'=>$request->created_at
        ]);
        return redirect('professor'); //Indica para qual página ir após a operação executada
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor=$this->objProfessor->find($id);
        return view('showProfessor', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor=$this->objProfessor->find($id);
        
        return view('editProfessor', compact('professor'));
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
        $this->objProfessor->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'materia'=>$request->materia,
            'vl_hora_aula'=>$request->vl_hora_aula,
            'created_at'=>$request->created_at
        ]);
        //redireciono para a view dos professors
        return redirect('professor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objProfessor->destroy($id);


        //redirecionamento para a view professor
        return redirect('professor');
    }
}
