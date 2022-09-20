<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Aluno;

class Sondagem extends Model
{ //tabela de avaliação escrita e de desenho na Fase 1 e 2
    use HasFactory;

    protected $table = "sondagem_alunos";
    protected $fillable = ['sala_id', 'aluno_id', 'bimestre', 'aspecto',
        'situacao', 'created_at', 'updated_at'];

    public function alunos() {
        return $this->belongsTo(Aluno::class);
    }
}
