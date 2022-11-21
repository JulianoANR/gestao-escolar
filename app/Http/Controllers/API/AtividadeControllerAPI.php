<?php

namespace App\Http\Controllers\API;

use App\Models\Atividade;
use App\Models\Curriculo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAtividadeRequest;
use App\Services\Atividade\CRUD\UpdateActivitiesService;

class AtividadeControllerAPI extends Controller
{
    public function update(UpdateAtividadeRequest $request)
    {
        $atividade = Atividade::with('disciplina')->findOrFail($request->id);

        $atividade = UpdateActivitiesService::handle($request, $atividade);

        return response()->json([
            'success' => true,
            'message' => 'Atividade atualizada com sucesso!',
            'atividade' => $atividade
        ], 200);
    }

    public function getCurriculos(){

        return response()->json([
            'success' => true,
            'message' => 'Currículos carregados com sucesso!',
            'curriculos' => Curriculo::where('disciplina_id', 1)
                                        ->where('bimestre', 1)
                                        ->where('serie', 1)
                                        ->get()
        ], 200);

    }
}
