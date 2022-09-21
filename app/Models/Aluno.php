<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';

    protected $fillable = ['ra', 'nome', 'situacao', 'escola_id', 'sala_id', 'num_chamada', 'dt_nascimento', 'digito', 'dt_matricula', 'deficiencia', 'sangue', 'religiao', 'sexo', 'cpf'];

    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function atividades()
    {
        return $this->belongsToMany(Atividade::class)->withPivot('situacao', 'interacao', 'escola_id', 'created_at', 'updated_at');
    }

    public function avaliacoes()
    {
        return $this->belongsToMany(Avaliacao::class)->withPivot('nota', 'avaliacao_id', 'aluno_id', 'escola_id')->withTimestamps();
    }

    public function aluno_atividade()
    {
        return $this->hasMany(AlunoAtividade::class, 'aluno_id', 'id');
    }

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function compensacoes()
    {
        return $this->hasMany(Compensacao::class);
    }

    public function habilidades()
    {
        return $this->belongsToMany(Habilidade::class)->withPivot('aluno_id', 'habilidade_id', 'situacao', 'bimestre', 'created_at', 'updated_at'); //1°
    }

    public function curriculos()
    {
        return $this->belongsToMany(Curriculo::class);
    }

    public function sondagem()
    {
        return $this->hasMany(Sondagem::class);
    }

    // Accessors
    public function getFormatedNomeAttribute()
    {
        return ucwords(mb_strtolower($this->attributes['nome'], 'UTF-8'));
    }

    public function getFormatedCreatedAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->attributes['created_at']));
    }

    public function getMatriculaDataAttribute()
    {
        return date('Y-m-d', strtotime($this->attributes['dt_matricula']));
    }

    public function getFormatedUpdatedAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->attributes['updated_at']));
    }

    public function getSerieAttribute()
    {
        return $this->sala->serie;
    }

    public function getTurmaAttribute()
    {
        return $this->sala->turma;
    }

    public function getNivelEnsinoAttribute()
    {
        return $this->sala->nivel_ensino;
    }

    public function getAtividadesNaoProgramadasAttribute()
    {
        return $this->atividades->where('programada', '=', 0);
    }

    public function getAtividadesProgramadasAttribute()
    {
        return $this->atividades->where('programada', '!=', 0);
    }

    public function getAtividadesNaoDevolvidasAttribute()
    {
        return $this->atividades()->wherePivot('situacao', '=', 'nao');
    }

    public function getAtividadesDevolvidasAttribute()
    {
        return $this->atividades()->wherePivot('situacao', '=', 'sim');
    }

    public function getFormatedObsAttribute()
    {
        if ($this->attributes['observacao'] == '') {
            return 'Sem Observações.';
        } else {
            return $this->attributes['observacao'];
        }
    }

    public function getAvaliacoesUmAttribute()
    {
        return $this->avaliacoes->where('bimestre', '=', 1);
    }

    public function getAvaliacoesDoisAttribute()
    {
        return $this->avaliacoes->where('bimestre', '=', 2);
    }

    public function getAvaliacoesTresAttribute()
    {
        return $this->avaliacoes->where('bimestre', '=', 3);
    }

    public function getAvaliacoesQuatroAttribute()
    {
        return $this->avaliacoes->where('bimestre', '=', 4);
    }

    // Scopes
    public function scopeBimestreHabilidade($query, $bimestre)
    {
        if ($bimestre) {
            if ($bimestre == 1) {
                $query = $query->wherePivot('bimestre', 1);
            } elseif ($bimestre == 2) {
                $query = $query->wherePivotIn('bimestre', [1, 2]);
            } elseif ($bimestre == 3) {
                $query = $query->wherePivotIn('bimestre', [1, 2, 3]);
            } elseif ($bimestre == 4) {
                $query = $query->wherePivotIn('bimestre', [1, 2, 3, 4]);
            }
        }

        return $query;
    }
}
