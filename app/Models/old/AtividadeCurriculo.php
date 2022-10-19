<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadeCurriculo extends Model
{
    use HasFactory;

    protected $table = 'atividade_curriculo';

    protected $fillable = ['atividade_id', 'curriculo_id'];
}