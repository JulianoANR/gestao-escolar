<?php

namespace App\Services\Salas;

use App\Models\{
    Sala,
    User
};

class GetSelectedClassroom{
    /**
     * Retorna a sala armazenada na sessão atual do Usuario.
     * Caso não possua nenhuma sala selecionada, retorna a primeira sala vinculada ao Usuario.
     *
     * @param User $user
     * @return Sala
     */
    public static function handle(User $user) : Sala
    {
        if(session('classroom') != null){
            return session('classroom');
        }
        return $user->salas()->first();
    }

}

