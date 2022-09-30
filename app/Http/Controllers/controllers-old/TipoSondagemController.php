<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoSondagemRequest;
use App\Http\Requests\UpdateTipoSondagemRequest;
use App\Models\TipoSondagem;

class TipoSondagemController extends Controller
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
     * @param  \App\Http\Requests\StoreTipoSondagemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoSondagemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoSondagem  $tipoSondagem
     * @return \Illuminate\Http\Response
     */
    public function show(TipoSondagem $tipoSondagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoSondagem  $tipoSondagem
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoSondagem $tipoSondagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoSondagemRequest  $request
     * @param  \App\Models\TipoSondagem  $tipoSondagem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoSondagemRequest $request, TipoSondagem $tipoSondagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoSondagem  $tipoSondagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoSondagem $tipoSondagem)
    {
        //
    }
}
