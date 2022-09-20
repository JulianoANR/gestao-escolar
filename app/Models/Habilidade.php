<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Aluno;

class Habilidade extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'serie', 'tipo'];

    public function alunos() {
        return $this->belongsToMany(Aluno::class)->withPivot('aluno_id', 'habilidade_id', 'situacao', 'bimestre', 'created_at', 'updated_at');
    }

    // Scopes
    public function scopeSerie($query, $serie, $ensino)
    {
        if($serie) {
            return $query->where('serie', $serie);
        }

        // habilidade só tem no infantil, ent  se  vier outro volta vazio.
        if($ensino) {
            if($ensino == 'educ_infantil') {
                $query = $query->whereIn('serie', ['maternal_1','maternal_2','bercario_1','bercario_2','fase_1','fase_2']);
            } else {
                //Isso é para retornar vazio sempre que cair  aqui - Gambiarra Temporaria
                $query = $query->where('id', 0);
            }
        }
        return $query;
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
