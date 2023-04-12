<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoMateria extends Model
{
    use HasFactory;

    // public $timestamps = false;

    protected $fillable = [
        'aluno_id',
        'materia_id',
    ];
}
