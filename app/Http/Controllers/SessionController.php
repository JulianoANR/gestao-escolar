<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Altera a classe e disciplina na Sessão do Usuario
     *
     */
    public function changeClassroom(Request $request)
    {
        $request->session()
                ->put('classroom', Sala::where('id', $request->class)->first());

        return response()->json(['success' => true], 200);
    }
}
