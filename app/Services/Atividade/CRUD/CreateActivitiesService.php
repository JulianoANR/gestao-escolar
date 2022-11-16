<?php

namespace App\Services\Atividade\CRUD;

use App\Http\Requests\StoreAtividadeRequest;
use App\Models\{Sala,
                User,
                Atividade};


class CreateActivitiesService {
    /**
     * Recebe os dados vindos do request e cria uma atividade
     *
     * @param StoreAtividadeRequest $request
     * @param User $user
     * @param Sala $sala
     * @return Atividade
     */
    public static function handle(StoreAtividadeRequest $request, User $user, Sala $sala) : Atividade {
        
        return Atividade::create([
            'data' => $request->data,
            'titulo' => $request->titulo,
            'programada' => $request->programada,
            'peso_atividade' => $request->peso_atividade,
            'professor_id' => $user->id,
            'disciplina_id' => $request->disciplina,
            'sala_id' => $sala->id,
            'tipo_programada_id' => $request->tipo_programada,
            'bimestre' => $request->bimestre,
            'observacao' => $request->observacao,
        ]);
    }
}
