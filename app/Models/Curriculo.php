<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Avaliacao, Atividade};

class Curriculo extends Model {
    use HasFactory;

    protected $table = "curriculos";

    public function atividades() {
        return $this->belongsToMany(Atividade::class);
    }

    public function avaliacoes() {
        return $this->belongsToMany(Avaliacao::class);
    }

    public function disciplina() {
        return $this->belongsTo(Disciplina::class);
    }

    //retorna o curriculo de planejamento do professor, geral a todas as listas.
    public static function planejamento()
    {
        return Curriculo::where('disciplina_id', 0)->where('bimestre', 0)->first();
    }

    public function scopeCurriculos($query, $request, $sala)
	{
	    $tmp = $query->where("disciplina_id", $request['disciplina'])
                        ->where("serie", $sala->serie)
                        ->whereIn("bimestre", $request['bimestre']);
	}

    public function scopeCurriculosPolivalente($query, $request, $sala)
	{

        return $query->whereIn("disciplina_id", array(1, 2, 3, 4, 5, 6))
                        ->where("serie", $sala->serie)
                        ->whereIn("bimestre", $request['bimestre']);
	}

    public function scopeCurriculosSearch($query, $request)
	{
        if($request['busca'] != null)
            return $query->where('descricao','LIKE', "%".$request['busca']."%")
                            // ->orWhere('linguagem','LIKE', "%".$request['busca']."%")
                            ->orWhere('codigo','LIKE', "%".$request['busca']."%")
                            ->orWhere('objeto_conhecimento','LIKE', "%".$request['busca']."%");
        else {
            return $query;
        }
	}

    // Acessors
    public function getFormatedNivelAttribute() {
        if ($this->nivel_ensino == 'fundamental_1') {
            return 'Fundamental 1';
        } else if($this->nivel_ensino == 'fundamental_2') {
            return 'Fundamental 2';
        } else if($this->nivel_ensino == 'educ_infantil') {
            return 'Educação Infantil';
        } else if($this->nivel_ensino == 'eja') {
            return 'Eja - Educação de Jovens e Adultos';
        }
    }

    public function getFormatedDisciplinaAttribute() {
        if($this->disciplina_id == "1") {
            return "Língua Portuguesa";
        } elseif($this->disciplina_id == "9") {
            return "Ed. Física";
        } else {
            return Disciplina::findOrFail($this->disciplina_id)->disciplina;
        }
    }

    public function getFormatedSerieAttribute() {
        if($this->serie == 'bercario_1') {
            return 'Berçário 1';
        } else if($this->serie == 'bercario_2') {
            return 'Berçário 2';
        } else if($this->serie == 'fase_1') {
            return '1º Fase';
        } else if($this->serie == 'fase_2') {
            return '2º Fase';
        } else if($this->serie == 'maternal_1') {
            return 'Maternal 1';
        } else if($this->serie == 'maternal_2') {
            return 'Maternal 2';
        } else if($this->serie == 'eja1_t1') {
            return 'Eja 1 - T1';
        } else if($this->serie == 'eja1_t2') {
            return 'Eja 1 - T2';
        } else if($this->serie == 'eja1_t3') {
            return 'Eja 1 - T3';
        } else if($this->serie == 'eja1_t4') {
            return 'Eja 1 - T4';
        } else if($this->serie == 'eja2_t1') {
            return 'Eja 2 - T1';
        } else if($this->serie == 'eja2_t2') {
            return 'Eja 2 - T2';
        } else if($this->serie == 'eja2_t3') {
            return 'Eja 2 - T3';
        } else if($this->serie == 'eja2_t4') {
            return 'Eja 2 - T4';
        } else if($this->serie == '1') {
            return '1° Ano';
        } else if($this->serie == '2') {
            return '2° Ano';
        } else if($this->serie == '3') {
            return '3° Ano';
        } else if($this->serie == '4') {
            return '4° Ano';
        } else if($this->serie == '5') {
            return '5° Ano';
        } else if($this->serie == '6') {
            return '6° Ano';
        } else if($this->serie == '7') {
            return '7° Ano';
        } else if($this->serie == '8') {
            return '8° Ano';
        } else if($this->serie == '9') {
            return '9° Ano';
        } else {
            return $this->serie;
        }
    }
}
