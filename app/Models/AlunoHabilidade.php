<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Aluno;
use App\Models\Habilidade;

class AlunoHabilidade extends Model
{
    use HasFactory;
    
    protected $table = "aluno_habilidade";
    protected $fillable = ['aluno_id', 'habilidade_id', 'situacao', 'bimestre'];

    public function alunos() {
        return $this->belongsToMany(Aluno::class)->withTimestamps();
    }

    public function habilidades() {
        return $this->belongsToMany(Habilidade::class)->withTimestamps();
    }

    // Accessors
    public function getHabilidadeAttribute() {
        return Habilidade::findOrFail($this->attributes['habilidade_id']);
    }

    public function getFormatedSituacaoAttribute() {
        return $this->attributes['situacao'] == 0 ? "Desenvolvendo" : "Alcançado";
    }

    public function getFormatedShortSituacaoAttribute() {
        return $this->attributes['situacao'] == 0 ? "D" : "A";
    }

    public function getAlunoNomeAttribute() {
        return Aluno::findOrFail($this->attributes['aluno_id'])->nome;
    }

    public function getAlunoNumeroAttribute() {
        return Aluno::findOrFail($this->attributes['aluno_id'])->num_chamada;
    }
}
