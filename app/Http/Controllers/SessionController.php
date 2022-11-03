<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    /**
     * Altera a classe e disciplina na Sessão do Usuario
     *
     */
    public function changeClassroom(Request $request)
    {
        $request->session()
                ->put('classroom',
                Auth::user()->salas()
                ->where('sala_id', $request->class)
                ->withPivot('disciplina_id')
                ->wherePivot('disciplina_id', $request->disciplina)->first());
        return response()->json([
            'success' => true,
            'disciplina' => $request->disciplina,
            'classe' => $request->class
        ], 200);
    }
}
