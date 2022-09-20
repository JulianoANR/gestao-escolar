<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    //tabela que salva dados dos gestores e seus cargos
    use HasFactory;

    protected $table = 'gestores';

    protected $fillable = ['escola_id', 'cargo', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class, 'escola_id');
    }
}
