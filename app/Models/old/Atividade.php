<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atividade extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'data', 'disciplina', 'id_professor', 'id_sala', 'id_escola',
        'observacao', 'peso_atividade', 'bimestre', 'programada',
    ];

    protected $appends = ['conteudo'];

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class)->withPivot('situacao', 'interacao', 'escola_id', 'created_at', 'updated_at');
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class, 'id_sala');
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class, 'id_escola');
    }

    public function user()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function aluno_atividade()
    {
        return $this->belongsToMany(AlunoAtividade::class, 'aluno_id', 'id');
    }

    public function curriculos()
    {
        return $this->belongsToMany(Curriculo::class)->withTimestamps();
    }

    public function disciplina_model()
    {
        return $this->belongsTo(Disciplina::class, 'disciplina');
    }

    public function tipo_programada()
    {
        return $this->belongsTo(TipoProgramada::class, 'programada', 'id');
    }

    /**
     * Accessors
     * Getters and setters
     */

    //Append Attribute
    public function getConteudoAttribute()
    {
        if ($this->programada != 0) {
            return '(PROGRAMADA) - '.$this->tipo_programada->descricao;
        } else {
            $conteudo = '';
            foreach ($this->curriculos as $curriculo) {
                $conteudo .= ($curriculo->codigo.'-'.$curriculo->descricao).' ';
            }

            return $conteudo;
        }
    }

    public function getFormatedDisciplinaAttribute()
    {
        if ($this->disciplina == '1') {
            return 'Língua Portuguesa';
        } elseif ($this->disciplina == '9') {
            return 'Ed. Física';
        } else {
            return Disciplina::findOrFail($this->disciplina)->disciplina;
        }
    }

    public function getFormatedDataAttribute()
    {
        return date('d/m/Y', strtotime($this->data));
    }

    public function getUnformatedDataAttribute() //Situação especifica
    {
    return date('Y/m/d', strtotime($this->data));
    }

    public function getNormalDataAttribute() //Situação especifica
    {
    return date('Y-d-m', strtotime($this->attributes['data']));
    }

    public function getFormatedAulaAttribute()
    {
        return $this->peso_atividade == '1' ? 'Única' : 'Dupla';
    }

    public function getFormatedBimestreAttribute()
    {
        return $this->bimestre.'° Bimestre';
    }

    public function getCurriculosAtividadeAttribute()
    {
        $this->disciplina == 10
            ? $disciplinas = [1, 2, 3, 4, 5, 6]
            : $disciplinas = [$this->disciplina];

        return Curriculo::whereIn('disciplina_id', $disciplinas)
            ->where([
                ['serie', $this->sala->serie],
                ['bimestre', $this->bimestre],
            ])->get();
    }

    public function getFormatedCreatedAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->attributes['created_at']));
    }

    public function getFormatedUpdatedAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->attributes['updated_at']));
    }

    public function getTiposProgramadasAttribute()
    {
        return TipoProgramada::all();
    }

    //Calendar
    public function getPrimeiroDiaLetivoAttribute()
    {
        $data = Calendario::find(1);

        return $data ? $data->data : date('Y').'-01-01';
    }

    public function getUltimoDiaLetivoAttribute()
    {
        $data = Calendario::find(2);

        return $data ? $data->data : date('Y').'-12-31';
    }

    public function getDiasNaoLetivosAttribute()
    {
        return Calendario::where('letivo', '!=', 1)->get();
    }

    public function getValidateDataAtividadeAttribute()
    {
        // code...
    }
}
