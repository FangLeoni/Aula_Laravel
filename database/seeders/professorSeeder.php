<?php

namespace Database\Seeders;

use App\Models\ProfessorModel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class professorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ProfessorModel $professor)
    {        
        //Aqui irão os registros usados para testes
        $dateCad=Carbon::now()->format('Y-m-d');
        $professor->create([
            'nome'=>'Ariovaldo Professor',
            'vl_hora_aula'=>'34',
            'materia'=>'Física Quântica',
            'created_at'=>$dateCad
        ]);
        //inserir outros registros...

    }
}