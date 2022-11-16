<?php

namespace App\Http\Controllers\API;

use App\Models\Atividade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAtividadeRequest;
use App\Services\Atividade\CRUD\UpdateActivitiesService;

class AtividadeControllerAPI extends Controller
{
    public function update(UpdateAtividadeRequest $request)
    {
        $atividade = Atividade::findOrFail($request->id);

        UpdateActivitiesService::handle($request, $atividade);

        return response()->json([
            'success' => true,
            'message' => 'Atividade atualizada com sucesso!',
        ], 200);
    }
}
