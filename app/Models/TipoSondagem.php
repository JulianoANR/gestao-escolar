<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSondagem extends Model
{
    use HasFactory;
    protected $table = "tipo_sondagem";
    protected $fillable = ['id','descricao','aspecto'];
}
