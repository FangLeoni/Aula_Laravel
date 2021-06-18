<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno', [AlunoController::class,'index']);
Route::get('/aluno/create', [AlunoController::class,'create']);
Route::get('/aluno/{id}', [AlunoController::class,'show']);
Route::post('/aluno/store', [AlunoController::class,'store'] );
Route::get('/aluno/edit/{id}', [AlunoController::class,'edit'] );
Route::post('/aluno/update/{id}', [AlunoController::class,'update'] );
Route::get('/aluno/delete/{id}', [AlunoController::class,'destroy'] );


Route::get('/professor', [ProfessorController::class,'index']);
Route::get('/professor/create', [ProfessorController::class,'create']);
Route::get('/professor/{id}', [ProfessorController::class,'show']);
Route::post('/professor/store', [ProfessorController::class,'store'] );
Route::get('/professor/edit/{id}', [ProfessorController::class,'edit'] );
Route::post('/professor/update/{id}', [ProfessorController::class,'update'] );
Route::get('/professor/delete/{id}', [ProfessorController::class,'destroy'] );

// Route::get('/professor', [ProfessorController::class,'index']);

// Route::get('/eventos', function () {
//     return view('eventos');
// });


// Pode gerar brechas no site
// Route::get('/{pagina}', function ($pagina) {
//     return view($pagina);
// });

// Route::get('/', HomeController::class);

// Route::get('/aluno/{nome}', function($nome){
//     return "<h1>Bem vindo $nome </h1>";
// });

// Route::get('aluno/{nome}/{curso}', [AlunoController::class,'curso']);



