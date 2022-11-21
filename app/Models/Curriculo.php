<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'ano',
        'semestre',
        'curso_id'
    ];


    // Relantionships

    public function atividades(){
        return $this->belongsToMany(Atividade::class);
    }
}
