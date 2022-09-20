<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoTramite extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_id', 'user_id', 'situacao', 'escola_id', 'aluno_ra'
    ];
}
