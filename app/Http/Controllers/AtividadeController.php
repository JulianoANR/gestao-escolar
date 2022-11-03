<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Models\Disciplina;
use App\Enums\BimestresEnum;
use App\Models\Bimestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Salas\GetUserDisciplines;
use App\Services\Salas\GetSelectedClassroom;

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
        $bimestres = BimestresEnum::getString();
        $sala = GetSelectedClassroom::handle($user);
        $disciplinas = GetUserDisciplines::handle($user);

        return view('activities.create', compact('user', 'sala', 'disciplinas', 'bimestres'));
    }

    public function show(Atividade $atividade){
        return view('activities.show', compact('atividade'));
    }

}
