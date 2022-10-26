<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atividade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'data',
        'titulo',
        'disciplina_id',
        'conteudo',
        'peso_atividade',
        'programada',
        'bimestre',
        'observacao',
    ];
    
    protected $dates = ['deleted_at'];
}
