<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Sala;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalaUser extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $table    = "sala_user";
    protected $fillable = ['user_id', 'tipo_id', 'sala_id',
    'disciplina_id', 'escola_id', 'id', 'deleted_at'
    ];
    protected $dates    = ['deleted_at'];

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function salas() {
        return $this->belongsToMany(Sala::class);
    }

    public function disciplina() {
        return $this->belongsTo(Disciplina::class);
    }
}
