<?php

namespace App\Services\Atividade\CRUD;

use App\Models\Atividade;
use App\Http\Requests\UpdateAtividadeRequest;

class UpdateActivitiesService {

    public static function handle(UpdateAtividadeRequest $request, Atividade $atividade){
        $atividade->update($request->validated());
    }
}
