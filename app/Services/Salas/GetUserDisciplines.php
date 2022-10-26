<?php

namespace App\Services\Salas;

use App\Models\Sala;
use App\Models\User;
use App\Models\Disciplina;
use App\Services\Salas\GetSelectedClassroom;
use Illuminate\Database\Eloquent\Collection;

class GetUserDisciplines {


    /**
     * Retorna os id's das disciplinas vinculadas ao Usuario.
     *
     * @param User $user
     * @return Array
     */
    public function getIdDisciplinas(User $user) : Array
    {
        return $user->scopeClassroomDisciplines(GetSelectedClassroom::handle($user)->id);
    }

    /**
     * Retorna as disciplinas do usuario referente a sala atual.
     *
     * @param User $user
     * @return Collection
     */
    public static function handle(User $user) : Collection
    {
        $class = new GetUserDisciplines();

        return Disciplina::whereIn('id', $class->getIdDisciplinas($user))->get();
    }
}

