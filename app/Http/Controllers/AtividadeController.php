<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Enums\BimestresEnum;
use Illuminate\Support\Facades\Auth;
use App\Services\Salas\GetUserDisciplines;
use App\Http\Requests\StoreAtividadeRequest;
use App\Models\TipoProgramada;
use App\Services\Salas\GetSelectedClassroom;
use App\Services\Atividade\CRUD\CreateActivitiesService;
use App\Services\Atividade\GetClassroomActivities;

class AtividadeController extends Controller
{
    /**
     * Retorna a tela principal da pagina de atividades
     *
     */
    public function index(){
        $user = Auth::user();
        $sala = GetSelectedClassroom::handle($user);
        $atividades = GetClassroomActivities::handle($user, $sala);
        
        return view('activities.index', compact('user', 'sala', 'atividades'));
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
        $tipos_programada = TipoProgramada::all();
        
        return view('activities.create', compact('user', 'sala', 'disciplinas', 'bimestres', 'tipos_programada'));
    }

    public function store(StoreAtividadeRequest $request){

        $user = Auth::user();
        $sala = GetSelectedClassroom::handle($user);
        $atividade = CreateActivitiesService::handle($request, $user, $sala);

        session()->flash('success', 'Atividade: '.$atividade->titulo.' criada com sucesso!');
        return redirect()->route('atividades.index');
    }

    public function show(Atividade $atividade){
        $user = Auth::user();
        $sala = GetSelectedClassroom::handle($user);
        $tipos_programada = TipoProgramada::all();

        return view('activities.show', compact( 'user', 'sala', 'atividade', 'tipos_programada'));
    }

}
