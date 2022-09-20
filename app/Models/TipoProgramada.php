<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\{
    Atividade
};

class TipoProgramada extends Model
{
    use HasFactory;

    protected $table = "tipo_programadas";
    protected $fillable = ['descricao'];

    public function atividades () {
        return $this->hasMany(Atividade::class, 'programada', 'id');
    }
}
