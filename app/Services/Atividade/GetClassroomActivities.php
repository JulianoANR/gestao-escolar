<?php

namespace App\Services\Atividade;

use App\Models\Sala;
use App\Models\Atividade;
use App\Models\Disciplina;
use Illuminate\Foundation\Auth\User;
use App\Services\Salas\GetSelectedClassroom;
use Illuminate\Database\Eloquent\Collection;

class GetClassroomActivities {
    /**
     * Retorna as atividades da sala selecionada
     *
     * @param User $user
     * @param Sala $sala
     * @param Disciplina $disciplina
     *
     * @return Collection
     */
    public static function handle(User $user, Sala $sala) {
        return Atividade::with('disciplina')
                        ->with('user')
                        ->where('sala_id', $sala->id)
                        ->where('disciplina_id', $sala->pivot->disciplina_id)
                        ->where('professor_id', $user->id)
                        ->get();
    }
}
