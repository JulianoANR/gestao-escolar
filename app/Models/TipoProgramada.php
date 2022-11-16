<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProgramada extends Model
{
    use HasFactory;

    protected $table = 'tipo_programada';

    protected $fillable = [
        'descricao',
    ];


    // Relationships

    public function atividades(){
        return $this->hasMany(Atividade::class);
    }

}
