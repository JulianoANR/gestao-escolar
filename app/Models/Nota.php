<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Aluno;

class Nota extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_id', 'bimestre_1', 'bimestre_2', 'bimestre_3', 'bimestre_4',
        'conceito_final', 'sala_id', 'disciplina_id', 'repo_conceito_final',
        'aluno_nome', 'aluno_numero'
    ];

    public function notas() {
        return $this->belongsTo(Aluno::class);
    }
}
