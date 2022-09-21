<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoAvaliacaoRequest;
use App\Http\Requests\UpdateTipoAvaliacaoRequest;
use App\Models\TipoAvaliacao;

class TipoAvaliacaoController extends Controller
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
     * @param  \App\Http\Requests\StoreTipoAvaliacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoAvaliacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoAvaliacao  $tipoAvaliacao
     * @return \Illuminate\Http\Response
     */
    public function show(TipoAvaliacao $tipoAvaliacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoAvaliacao  $tipoAvaliacao
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoAvaliacao $tipoAvaliacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoAvaliacaoRequest  $request
     * @param  \App\Models\TipoAvaliacao  $tipoAvaliacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoAvaliacaoRequest $request, TipoAvaliacao $tipoAvaliacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoAvaliacao  $tipoAvaliacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoAvaliacao $tipoAvaliacao)
    {
        //
    }
}
