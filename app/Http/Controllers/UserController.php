<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\Users\UpdateUserService;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function __construct(
        public UpdateUserService $updateUserService
    ){}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('professor_access'), Response::HTTP_FORBIDDEN, 'Você não tem permissão para acessar esta página.');
        $users = User::with('cargos')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::pluck('title', 'id');

        return view('users.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::crete($request->validated());
        $user->cargos()->sync($request->input('cargos',[]));

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('settings.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request)
    {
        $this->updateUserService->handle($request, Auth::user());

        return redirect()->back()->with('success', 'Perfil atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        abort_if(Gate::denies('admin_access'), Response::HTTP_FORBIDDEN, 'Acesso não permitido!');
        $user->delete();
        return redirect()->route('users.index')->with('excluir.user', ''.$user->name);
    }

    /**
     * Demonstra a tela de preferências de funcionamento do sistema.
     * Como por exemplo, a preferência de tema de cor, idioma, etc.
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     *
     */

    public function preferences(User $user)
    {
        return view('settings.preferences', compact('user'));
    }

    public function classrooms(User $user)
    {
        return view('classrooms.index', compact('user'));
    }

    public function schools(User $user)
    {
        return view('settings.schools', compact('user'));
    }

    public function logs(User $user){
        return view('log.user-logs', compact('user'));
    }

    public function systemLogs(User $user){
        return view('log.system-logs', compact('user'));
    }
    public function resetarSenha(User $user)
    {
        abort_if(Gate::denies('admin_access'), Response::HTTP_FORBIDDEN, 'Acesso não permitido!');

        $password = 'Atividade1!';

        $user->forceFill([
            'password' => Hash::make($password)
        ]);
        $user->save();
        return redirect()->route('users.index')->with('resetar.senha', ''.$user->name);
    }
}
