<?php

namespace App\Models;

use App\Models\{
    Atividade
};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProgramada extends Model
{
    use HasFactory;

    protected $table = 'tipo_programadas';

    protected $fillable = ['descricao'];

    public function atividades()
    {
        return $this->hasMany(Atividade::class, 'programada', 'id');
    }
}
