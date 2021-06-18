<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorModel extends Model
{
    protected $table='professor';
    protected $fillable=['nome','materia','vl_hora_aula', 'created_at'];
    use HasFactory;
}
