<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AulaPrevista extends Model
{
    use HasFactory;

    protected $table = 'aulas_previstas';

    protected $fillable = [
        'id', 'sala_id', 'disciplina_id', 'previsao_bimestre1',
        'previsao_bimestre2', 'previsao_bimestre3', 'previsao_bimestre4',
    ];

    //Tem q que criar as relações ainda, qnd for necessario
    // public function disciplina() {
    //     return $this->hasMany(Compensacao::class);
    // }

    // public function sala() {
    //     return $this->hasMany(Compensacao::class);
    // }
}
