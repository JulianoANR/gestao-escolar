<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlunoHabilidadeRequest;
use App\Http\Requests\UpdateAlunoHabilidadeRequest;
use App\Models\AlunoHabilidade;

class AlunoHabilidadeController extends Controller
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
     * @param  \App\Http\Requests\StoreAlunoHabilidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlunoHabilidadeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlunoHabilidade  $alunoHabilidade
     * @return \Illuminate\Http\Response
     */
    public function show(AlunoHabilidade $alunoHabilidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlunoHabilidade  $alunoHabilidade
     * @return \Illuminate\Http\Response
     */
    public function edit(AlunoHabilidade $alunoHabilidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlunoHabilidadeRequest  $request
     * @param  \App\Models\AlunoHabilidade  $alunoHabilidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlunoHabilidadeRequest $request, AlunoHabilidade $alunoHabilidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlunoHabilidade  $alunoHabilidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlunoHabilidade $alunoHabilidade)
    {
        //
    }
}
