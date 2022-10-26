<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Salas\GetSelectedClassroom;
use App\Services\Salas\GetUserDisciplines;

class AtividadeController extends Controller
{
    /**
     * Retorna a tela principal da pagina de atividades
     *
     */
    public function index(){
        $user = Auth::user();

        $sala = GetSelectedClassroom::handle($user);
        return view('activities.index', compact('sala'));
    }

    /**
     * Retorna a tela de criação de atividade
     *
     */
    public function create(){
        $user = Auth::user();
        $sala = GetSelectedClassroom::handle($user);
        $disciplinas = GetUserDisciplines::handle($user);
        return view('activities.create', compact('user', 'sala', 'disciplinas'));
    }

    public function show(Atividade $atividade){
        return view('activities.show', compact('atividade'));
    }

}
