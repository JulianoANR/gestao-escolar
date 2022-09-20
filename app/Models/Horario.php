<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $table = "horarios";
    protected $fillable = [
        'dia', 'sala_id', 'aula_1', 'aula_2', 'aula_3', 'aula_4', 'aula_5', 'aula_6'
    ];

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }
}
