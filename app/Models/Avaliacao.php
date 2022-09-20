<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $table = "avaliacoes";
    protected $fillable = ['id', 'data', 'disciplina_id', 'sala_id',
        'professor_id', 'bimestre', 'peso', 'tipo_id', 'descricao', 'observacao'
    ];

    public function alunos() {
        return $this->belongsToMany(Aluno::class)->withPivot('nota',
        'avaliacao_id', 'aluno_id', 'escola_id')->withTimestamps();
    }

    public function sala() {
        return $this->belongsTo(Sala::class);
    }

    public function escola() {
        return $this->belongsTo(Escola::class);
    }

    public function tipo_avaliacao() {
        return $this->belongsTo(TipoAvaliacao::class, 'tipo_id');
    }

    public function user() {
        return $this->belongsTo(Usuario::class);
    }

    public function aluno_atividade() {
        return $this->belongsToMany(AlunoAtividade::class, 'aluno_id', 'id');
    }

    public function curriculos () {
        return $this->belongsToMany(Curriculo::class)->withTimestamps();
    }

    // Accessors
    public function getFormatedDisciplinaAttribute() {
        if($this->disciplina_id == "1") {
            return "Língua Portuguesa";
        } elseif($this->disciplina_id == "9") {
            return "Ed. Física";
        } else {
            return Disciplina::findOrFail($this->disciplina_id)->disciplina;
        }
    }

    public function getPolivalenteDisciplinasAttribute() {
        return Disciplina::whereIn('id', [1,2,3,4,5,6])->get();
    }

    public function getTipoAttribute() {
        return $this->tipo_avaliacao()->descricao;
    }

    public function getFormatedDataAttribute() {
        return date("d/m/Y", strtotime($this->data));
    }

    public function getFormatedBimestreAttribute() {
        return $this->bimestre . "° Bimestre";
    }

    public function getFormatedCreatedAttribute() {
        return date("d/m/Y H:i:s", strtotime($this->attributes['created_at']));
    }

    public function getFormatedUpdatedAttribute() {
        return date("d/m/Y H:i:s", strtotime($this->attributes['updated_at']));
    }

    //Pega todos os alunos da sala que estão com a data de matricula dentro da data da prova
    public function getAlunosMatriculaAttribute() {
        $alunos = $this->sala->alunos;
        return $alunos->where('dt_matricula', '<=', $this->data);
    }

    // Scopes
    public function scopeBusca($query, $bimestre, $ensino, $disciplina, $serie)
    {
        if($bimestre) {
            $query = $query->where('bimestre', $bimestre);
        }
        if($ensino) {
            $query = $query->whereHas('sala', function($q) use($ensino){
                $q->where('nivel_ensino', $ensino);
            });
        }
        if($disciplina) {
            $query = $query->where('disciplina_id', $disciplina);
        }
        if($serie) {
            $query = $query->whereHas('sala', function($q) use($serie){
                $q->where('serie', $serie);
            });
        }
        return $query;
    }
}
