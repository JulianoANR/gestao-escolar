<?php

namespace App\Models;

use App\configs\Enums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'salas';

    protected $fillable = ['serie', 'turma', 'escola_id', 'nivel_ensino', 'observacao', 'vagas_limite', 'periodo'];

    public function escola()
    {
        // return $this->belongsTo(Escola::class, 'chave_estrangeira', 'campo_associado (chave_primaria)');
        return $this->belongsTo(Escola::class);
    }

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('escola_id', 'disciplina_id', 'tipo_id', 'created_at', 'updated_at', 'deleted_at');
    }

    // public function salaUser() {
    //     return $this->hasMany(SalaUser::class);
    // }

    public function atividades()
    {
        return $this->hasMany(Atividade::class, 'id_sala');
    }

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class, 'sala_id');
    }

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }

    // Accessors
    public function getFormatedNivelAttribute()
    {
        if ($this->nivel_ensino == 'fundamental_1') {
            return 'Fundamental 1';
        } elseif ($this->nivel_ensino == 'fundamental_2') {
            return 'Fundamental 2';
        } elseif ($this->nivel_ensino == 'educ_infantil') {
            return 'Educação Infantil';
        } elseif ($this->nivel_ensino == 'eja') {
            return 'Eja - Educação de Jovens e Adultos';
        }
    }

    public function getDisciplinaAttribute()
    {
        return Disciplina::find($this->pivot->disciplina_id);
    }

    public function getFormatedSerieAttribute()
    {
        if ($this->serie == 'bercario_1') {
            return 'Berçário 1';
        } elseif ($this->serie == 'bercario_2') {
            return 'Berçário 2';
        } elseif ($this->serie == 'fase_1') {
            return '1º Fase';
        } elseif ($this->serie == 'fase_2') {
            return '2º Fase';
        } elseif ($this->serie == 'maternal_1') {
            return 'Maternal 1';
        } elseif ($this->serie == 'maternal_2') {
            return 'Maternal 2';
        } elseif ($this->serie == 'eja1_t1') {
            return 'Eja 1 - T1';
        } elseif ($this->serie == 'eja1_t2') {
            return 'Eja 1 - T2';
        } elseif ($this->serie == 'eja1_t3') {
            return 'Eja 1 - T3';
        } elseif ($this->serie == 'eja1_t4') {
            return 'Eja 1 - T4';
        } elseif ($this->serie == 'eja2_t1') {
            return 'Eja 2 - T1';
        } elseif ($this->serie == 'eja2_t2') {
            return 'Eja 2 - T2';
        } elseif ($this->serie == 'eja2_t3') {
            return 'Eja 2 - T3';
        } elseif ($this->serie == 'eja2_t4') {
            return 'Eja 2 - T4';
        } elseif ($this->serie == '1') {
            return '1° Ano';
        } elseif ($this->serie == '2') {
            return '2° Ano';
        } elseif ($this->serie == '3') {
            return '3° Ano';
        } elseif ($this->serie == '4') {
            return '4° Ano';
        } elseif ($this->serie == '5') {
            return '5° Ano';
        } elseif ($this->serie == '6') {
            return '6° Ano';
        } elseif ($this->serie == '7') {
            return '7° Ano';
        } elseif ($this->serie == '8') {
            return '8° Ano';
        } elseif ($this->serie == '9') {
            return '9° Ano';
        } else {
            return $this->serie;
        }
    }

    public function getNextFormatedSerieAttribute()
    {
        if ($this->serie == 'bercario_1') {
            return 'Berçário 2';
        } elseif ($this->serie == 'bercario_2') {
            return 'Maternal 1';
        } elseif ($this->serie == 'maternal_1') {
            return 'Maternal 2';
        } elseif ($this->serie == 'maternal_2') {
            return '1º Fase';
        } elseif ($this->serie == 'fase_1') {
            return '2º Fase';
        } elseif ($this->serie == 'fase_2') {
            return '1° Ano do Ensino Fundamental';
        } elseif ($this->serie == '1') {
            return '2° Ano do Ensino Fundamental';
        } elseif ($this->serie == '2') {
            return '3° Ano do Ensino Fundamental';
        } elseif ($this->serie == '3') {
            return '4° Ano do Ensino Fundamental';
        } elseif ($this->serie == '4') {
            return '5° Ano do Ensino Fundamental';
        } elseif ($this->serie == '5') {
            return '6° Ano do Ensino Fundamental';
        } elseif ($this->serie == '6') {
            return '7° Ano do Ensino Fundamental';
        } elseif ($this->serie == '7') {
            return '8° Ano do Ensino Fundamental';
        } elseif ($this->serie == '8') {
            return '9° Ano do Ensino Fundamental';
        } elseif ($this->serie == '9') {
            return '1° Ano do Ensino Medio';
        } elseif ($this->serie == 'eja1_t1') {
            return 'Eja 1 - T2';
        } elseif ($this->serie == 'eja1_t2') {
            return 'Eja 1 - T3';
        } elseif ($this->serie == 'eja1_t3') {
            return 'Eja 1 - T4';
        } elseif ($this->serie == 'eja1_t4') {
            return 'Eja 1 - T4';
        } elseif ($this->serie == 'eja2_t1') {
            return 'Eja 2 - T2';
        } elseif ($this->serie == 'eja2_t2') {
            return 'Eja 2 - T3';
        } elseif ($this->serie == 'eja2_t3') {
            return 'Eja 2 - T4';
        } elseif ($this->serie == 'eja2_t4') {
            return null;
        }
    }

    public function getFormatedObsAttribute()
    {
        if ($this->attributes['observacao'] == '') {
            return 'Sem Observações.';
        } else {
            return $this->attributes['observacao'];
        }
    }

    public function getProfessoresAttribute()
    {
        return $this->users->where('cargo', '=', 'professor');
    }

    public function getAlunosMatriculadosAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Matriculado');
    }

    public function getAlunosTransferidosAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Transferido');
    }

    public function getAlunosRemanejadosAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Remanejado');
    }

    public function getAlunosAbandonoAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Abandono');
    }

    public function getAlunosFalecidosAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Falecido');
    }

    public function getAlunosReclassificadosAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Reclassificado');
    }

    public function getAlunosAprovadosAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Aprovado');
    }

    public function getAlunosRetidosNotasAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Retido por notas');
    }

    public function getAlunosRetidosFaltasAttribute()
    {
        return $this->alunos->where('situacao', '=', 'Retido por faltas');
    }

    public function getAtividadesNaoProgramadasAttribute()
    {
        return $this->atividades->where('programada', '=', 0);
    }

    public function getAtividadesProgramadasAttribute()
    {
        return $this->atividades->where('programada', '!=', 0);
    }

    // -- HORARIOS -------------------------------------------------
    public function getAulasSegundaAttribute()
    {
        return $this->horarios->where('dia', '=', 'segunda')->first();
    }

    public function getAulasTercaAttribute()
    {
        return $this->horarios->where('dia', '=', 'terca')->first();
    }

    public function getAulasQuartaAttribute()
    {
        return $this->horarios->where('dia', '=', 'quarta')->first();
    }

    public function getAulasQuintaAttribute()
    {
        return $this->horarios->where('dia', '=', 'quinta')->first();
    }

    public function getAulasSextaAttribute()
    {
        return $this->horarios->where('dia', '=', 'sexta')->first();
    }
    // ------------------------------------------------------------

    public function getBimestreAtualAttribute()
    {
        return Config::findOrFail(8)->status;
    }

    public function getCategoriaNivelEnsinoAttribute()
    {
        $nivel_ensino = Enums::nivelEnsino();

        if ($this->nivel_ensino == 'educ_infantil') {
            return $nivel_ensino->EducInfantil;
        } elseif ($this->nivel_ensino == 'fundamental_1') {
            return $nivel_ensino->Fundamental1;
        } elseif ($this->nivel_ensino == 'fundamental_2') {
            return $nivel_ensino->Fundamental2;
        } elseif ($this->nivel_ensino == 'eja') {
            if ($this->serie == 'eja1_t1' || $this->serie == 'eja1_t2' || $this->serie == 'eja1_t3' || $this->serie == 'eja1_t4') {
                return $nivel_ensino->Fundamental1;
            } else {
                return $nivel_ensino->Fundamental2;
            }
        }
    }

    // -- AVALIAÇÕES -------------------------------------------------

    public function getAvaliacoesBimestreUmAttribute()
    {
        return $this->avaliacoes->where('bimestre', 1);
    }

    public function getAvaliacoesBimestreDoisAttribute()
    {
        return $this->avaliacoes->where('bimestre', 2);
    }

    public function getAvaliacoesBimestreTresAttribute()
    {
        return $this->avaliacoes->where('bimestre', 3);
    }

    public function getAvaliacoesBimestreQuatroAttribute()
    {
        return $this->avaliacoes->where('bimestre', 4);
    }

    //-- DISCIPLINAS -------------------------------------------------
    public function getInfantilDisciplinas()
    {
        return Disciplina::where('id', 11)->get();
    }

    public function getFund1Disciplinas()
    {
        return Disciplina::whereIn('id', [10, 9, 8, 7])->get();
    }

    public function getFund2Disciplinas()
    {
        return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 7])->get();
    }

    public function getPolivalenteAttribute()
    {
        return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6])->get();
    }

    public function getAllDisciplinasIdAttribute()
    {
        if ($this->nivel_ensino == 'educ_infantil') {
            return Disciplina::where('id', 11)->get();
        } elseif ($this->nivel_ensino == 'fundamental_1') {
            return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 9, 8, 7])->get();
        } elseif ($this->nivel_ensino == 'fundamental_2') {
            return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 9])->get();
        } elseif ($this->nivel_ensino == 'eja') {
            if ($this->serie == 'eja1_t1' || $this->serie == 'eja1_t2' || $this->serie == 'eja1_t3' || $this->serie == 'eja1_t4') {
                return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 9])->get();
            } else {
                return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 9])->get();
            }
        }
    }

    public function getDisciplinasIdAttribute()
    {
        if ($this->nivel_ensino == 'educ_infantil') {
            return Disciplina::where('id', 11)->get();
        } elseif ($this->nivel_ensino == 'fundamental_1') {
            return Disciplina::whereIn('id', [10, 9, 8, 7])->get();
        } elseif ($this->nivel_ensino == 'fundamental_2') {
            return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 9])->get();
        } elseif ($this->nivel_ensino == 'eja') {
            if ($this->serie == 'eja1_t1' || $this->serie == 'eja1_t2' || $this->serie == 'eja1_t3' || $this->serie == 'eja1_t4') {
                return Disciplina::whereIn('id', [10, 9])->get();
            } else { //Eja 2
                return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 9])->get();
            }
        }

        return null; //caso erro de dados retorna null
    }
}
