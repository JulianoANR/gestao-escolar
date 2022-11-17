<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atividade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'data',
        'titulo',
        'peso_atividade',
        'programada',
        'bimestre',
        'professor_id',
        'disciplina_id',
        'sala_id',
        'tipo_programada_id',
        'observacao',
    ];

    protected $dates = ['deleted_at'];

    // Relationships

    public function user(){
        return $this->belongsTo(User::class, 'professor_id');
    }

    public function disciplina(){
        return $this->belongsTo(Disciplina::class);
    }

    public function sala(){
        return $this->belongsTo(Sala::class);
    }

    public function tipo_programada(){
        return $this->belongsTo(TipoProgramada::class);
    }

    // Accessors

    public function formatBimestre(){
        return $this->bimestre.'º Bimestre';
    }

}
