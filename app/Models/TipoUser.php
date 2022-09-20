<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUser extends Model {
    use HasFactory;

    protected $table    = "tipo_user";
    protected $fillable = ['user_id', 'tipo_id', 'sala_id'];

}
