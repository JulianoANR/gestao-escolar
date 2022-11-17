<?php

namespace App\Services\Atividade\CRUD;

use App\Models\Atividade;
use App\Http\Requests\UpdateAtividadeRequest;

class UpdateActivitiesService {
    /**
     * Recebe os dados via do Controlador de API e atualiza a atividade com os dados enviados.
     *
     * @param UpdateAtividadeRequest $request
     * @param Atividade $atividade
     * @return Atividade
     */
    public static function handle(UpdateAtividadeRequest $request, Atividade $atividade) : Atividade {
        $atividade->update($request->validated());

        return $atividade;
    }
}
