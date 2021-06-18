<?php

namespace Database\Seeders;

use App\Models\AlunoModel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class alunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(AlunoModel $aluno)
    {        
        //Aqui irão os registros usados para testes
        $dateCad=Carbon::now()->format('Y-m-d');
        $aluno->create([
            'nome'=>'Rodrigo',
            'idade'=>'17',
            'curso'=>'Técnico em Informática',
            'bolsa'=>'500',
            'created_at'=>$dateCad
        ]);

        $aluno->create([
            'nome'=>'Roger',
            'idade'=>'14',
            'curso'=>'Técnico em Informática',
            'bolsa'=>'500',
            'created_at'=>$dateCad
        ]);

        $aluno->create([
            'nome'=>'Cleberson',
            'idade'=>'54',
            'curso'=>'Técnico em Informática',
            'bolsa'=>'500',
            'created_at'=>$dateCad
        ]);

        $aluno->create([
            'nome'=>'Nostradamos',
            'idade'=>'1224',
            'curso'=>'Técnico em Informática',
            'bolsa'=>'500',
            'created_at'=>$dateCad
        ]);
        //inserir outros registros...

    }
}
