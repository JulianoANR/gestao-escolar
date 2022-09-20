<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlunoAtividadeRequest;
use App\Http\Requests\UpdateAlunoAtividadeRequest;
use App\Models\AlunoAtividade;

class AlunoAtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlunoAtividadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlunoAtividadeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlunoAtividade  $alunoAtividade
     * @return \Illuminate\Http\Response
     */
    public function show(AlunoAtividade $alunoAtividade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlunoAtividade  $alunoAtividade
     * @return \Illuminate\Http\Response
     */
    public function edit(AlunoAtividade $alunoAtividade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlunoAtividadeRequest  $request
     * @param  \App\Models\AlunoAtividade  $alunoAtividade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlunoAtividadeRequest $request, AlunoAtividade $alunoAtividade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlunoAtividade  $alunoAtividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlunoAtividade $alunoAtividade)
    {
        //
    }
}
