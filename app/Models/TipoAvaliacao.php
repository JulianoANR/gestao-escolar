<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAvaliacao extends Model
{
    use HasFactory;

    protected $table = "tipo_avaliacoes";
    protected $fillable = ['id','descricao'];

    public function avaliacoes () {
        return $this->hasMany(Avaliacao::class, 'tipo_id', 'id');
    }
}
