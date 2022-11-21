<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function cargos()
    {
        return $this->belongsToMany(Cargo::class);
    }
}
