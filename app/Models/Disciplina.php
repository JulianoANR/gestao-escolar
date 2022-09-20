<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $fillable = ['disciplina'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function atividades()
    {
        return $this->hasMany(Atividade::class);
    }

    // Accessors
    public function getFormatedDisciplinaAttribute()
    {
        if ($this->id == '1') {
            return 'Língua Portuguesa';
        } elseif ($this->id == '9') {
            return 'Ed. Física';
        } else {
            return $this->attributes['disciplina'];
        }
    }

    public function getFormatedDisciplinasAttributte($disciplinas)
    {
        foreach ($disciplinas as $disciplina) {
            if ($disciplina->disciplina == 'Língua_Portuguesa') {
                $disciplina->disciplina = 'Língua Portuguesa';
            } elseif ($disciplina->disciplina == 'Ed_Física') {
                $disciplina->disciplina = 'Ed. Física';
            } else {
                $disciplina->disciplina = $this->attributes['disciplina'];
            }
        }

        return $disciplinas;
    }

    public function getDisciplinasListaAttribute($disciplinas)
    {
        if ($disciplinas->contains('id', 10)) {
            $polivalente = Disciplina::all()->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 10])->get();
            $others = Disciplina::alla()->whereNotIn('id', $polivalente->pluck('id'))->get();
            $disciplinas = $polivalente->merge($others);
        }

        foreach ($disciplinas as $disciplina) {
            if ($disciplina->disciplina == 'Língua_Portuguesa') {
                $disciplina->disciplina = 'Língua Portuguesa';
            } elseif ($disciplina->disciplina == 'Ed_Física') {
                $disciplina->disciplina = 'Ed. Física';
            }
        }

        return $disciplinas->unique('id');
    }

    public static function get_infantil_disciplinas()
    {
        return Disciplina::where('id', 11)->get();
    }

    public static function get_fund1_disciplinas()
    {
        return Disciplina::whereIn('id', [10, 9, 8, 7])->get();
    }

    public static function get_fund2_disciplinas()
    {
        return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 7])->get();
    }

    public function getPolivalenteAttribute()
    {
        return Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6])->get();
    }
}
