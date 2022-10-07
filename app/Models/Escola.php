<?php

namespace App\Models;

use App\Enums\{RegioesEnum, SegmentosEnum};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'segmento',
        'sed_cod_escola',
        'cie',
        'email',
        'telefone_1',
        'telefone_2',
        'regiao',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'complemento',
        'latitude',
        'longitude',
        'observacao',
        'endereco',
        'observacao'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'segmento'          => SegmentosEnum::class,
        'regiao'            => RegioesEnum::class,
    ];

    // Scopes
    public function scopeSearch($query, $search)
    {
        return $query->where('nome'   , 'like', "%$search%")
                    ->orWhere('cie'   , 'like', "%$search%")
                    ->orWhere('regiao', 'like', "%$search%");
    }

    // Relationships

    public function salas(){
        return $this->hasMany(Sala::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
