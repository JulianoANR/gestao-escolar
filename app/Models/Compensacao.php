<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compensacao extends Model
{
    protected $table = 'compensacoes';

    protected $fillable = ['disciplina_id', 'aluno_id', 'compensacao', 'bimestre'];

    use HasFactory;

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
