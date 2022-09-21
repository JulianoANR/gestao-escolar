<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscolaUser extends Model
{
    use HasFactory;

    protected $table = 'escola_user';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function escola()
    {
        return $this->belongsToMany(Escola::class);
    }
}
