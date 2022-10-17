<?php

namespace App\Models;

use App\configs\Enums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
