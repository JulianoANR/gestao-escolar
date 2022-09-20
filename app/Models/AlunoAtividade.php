<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Atividade;
use App\Models\Aluno;

class AlunoAtividade extends Model
{
    use HasFactory;

    protected $table = 'aluno_atividade';

    protected $fillable = ['aluno_id', 'atividade_id', 'interacao', 'situacao', 'escola_id',];

    public function alunos() {
        return $this->belongsToMany(Aluno::class, 'aluno_id', 'id')->withTimestamps();
    }

    public function atividades() {
        return $this->belongsToMany(Atividade::class, 'atividade_id', 'id');
    }

    public function atividade() {
        return $this->belongsTo(Atividade::class);
    }
}
