<?php

namespace App\Models;

use App\Enums\{RegioesEnum, SegmentosEnum};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 
        'segmento',
        'sed_cod_escola',
        'cie',
        'email',
        'telefone_1',
        'telefone_2',
        'regiao', 
        'cep',
        'endereco',
        'numero',
        'bairro',
        'complemento',
        'latitude',
        'longitude',
        'observacao',
        'endereco', 
        'observacao'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'segmento'          => SegmentosEnum::class,
        'regiao'            => RegioesEnum::class,
    ];

    // Scopes
    public function scopeSearch($query, $search)
    {
        return $query->where('nome'   , 'like', "%$search%")
                    ->orWhere('cie'   , 'like', "%$search%")
                    ->orWhere('regiao', 'like', "%$search%");
    }

    // Accessors
    // public function getFormatedObsAttribute()
    // {
    //     if ($this->attributes['observacao'] == '') {
    //         return 'Sem Observações.';
    //     } else {
    //         return $this->attributes['observacao'];
    //     }
    // }

    // public function getGestoresAttribute()
    // {
    //     return $this->users->where('cargo', '=', 'gestor');
    // }

    // public function getAdministrativosAttribute()
    // {
    //     return $this->users->where('cargo', '=', 'administrativo');
    // }

    // public function getProfessoresAttribute()
    // {
    //     return $this->users->where('cargo', '=', 'professor');
    // }

    // public function getAlunosMatriculadosAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Matriculado');
    // }

    // public function getAlunosTransferidosAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Transferido');
    // }

    // public function getAlunosRemanejadosAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Remanejado');
    // }

    // public function getAlunosAbandonoAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Abandono');
    // }

    // public function getAlunosFalecidosAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Falecido');
    // }

    // public function getAlunosReclassificadosAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Reclassificado');
    // }

    // public function getAlunosAprovadosAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Aprovado');
    // }

    // public function getAlunosRetidosNotasAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Retido por notas');
    // }

    // public function getAlunosRetidosFaltasAttribute()
    // {
    //     return $this->alunos->where('situacao', '=', 'Retido por faltas');
    // }

    // public function getSeriesInfantilAttribute()
    // {
    //     return $this->salas()->where('nivel_ensino', 'educ_infantil')->distinct('serie')->pluck('serie')->sort();
    // }

    // public function getHasFundamentalAttribute()
    // {
    //     $check = $this->salas()->where('nivel_ensino', '!=', 'educ_infantil')->first();

    //     return $check ? true : false;
    // }

    // public function getHasInfantilAttribute()
    // {
    //     $check = $this->salas()->where('nivel_ensino', '==', 'educ_infantil')->first();

    //     return $check ? true : false;
    // }

    // public function getDisciplinasNivelEnsinoAttribute()
    // {
    //     $nvl = $this->tipo_ensino;
    //     $disciplinas_ids = [];
    //     if ($nvl == 'SECRETARIA' || $nvl == 'CEI' || $nvl == 'CEI/EMEI' || $nvl == 'CEI/EMEI/EMEF' || $nvl == 'CEI/EMEF') {
    //         $disciplinas_ids = array_merge($disciplinas_ids, [11]);
    //     }
    //     if ($nvl == 'SECRETARIA' || $nvl == 'EMEI' || $nvl == 'CEI/EMEI' || $nvl == 'CEI/EMEI/EMEF' || $nvl == 'EMEI/EMEF') {
    //         $disciplinas_ids = array_merge($disciplinas_ids, [10, 8]);
    //     }
    //     if ($nvl == 'SECRETARIA' || $nvl == 'EMEI' || $nvl == 'CEI/EMEI' || $nvl == 'CEI/EMEI/EMEF' || $nvl == 'EMEI/EMEF' || $nvl == 'CEI\EMEF' || $nvl == 'EMEF') {
    //         $disciplinas_ids = array_merge($disciplinas_ids, [1, 2, 3, 4, 5, 6, 7, 9]);
    //     }

    //     return Disciplina::find($disciplinas_ids)->sort();
    // }

    // public function getParticipacaoGeralAttribute()
    // {
    //     $todas = $this->alunos_atividades;
    //     $faltas = $todas->where('situacao', 'nao')->count();

    //     return number_format(100 - (($faltas * 100) / $todas->count()), 1);
    // }
}
