<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroPresenca extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_materia_id',
        'presente',
        'data_referencia',
    ];

    protected $casts = [
        'presente' => 'boolean',
    ];

    protected $dates = [
        'data_referencia',
        'created_at',
        'updated_at',
    ];
}
