<?php

namespace App\Models;

use App\configs\Enums;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'salas';

    protected $fillable = [
        'escola_id',
        'turma',
        'observacao',
    ];


    // Relationships


    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }


    // Accessors

    public function getEscolaName(){
        return $this->escola->nome;
    }

    public function formatDisciplina($disciplina) {
        return Disciplina::where('id', $disciplina)->first()->descricao;
    }

}
