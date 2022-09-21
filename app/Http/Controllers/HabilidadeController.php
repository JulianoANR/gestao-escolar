<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabilidadeRequest;
use App\Http\Requests\UpdateHabilidadeRequest;
use App\Models\Habilidade;

class HabilidadeController extends Controller
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
     * @param  \App\Http\Requests\StoreHabilidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHabilidadeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habilidade  $habilidade
     * @return \Illuminate\Http\Response
     */
    public function show(Habilidade $habilidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habilidade  $habilidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Habilidade $habilidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHabilidadeRequest  $request
     * @param  \App\Models\Habilidade  $habilidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHabilidadeRequest $request, Habilidade $habilidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habilidade  $habilidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilidade $habilidade)
    {
        //
    }
}
