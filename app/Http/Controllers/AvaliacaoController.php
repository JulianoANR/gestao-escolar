<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAvaliacaoRequest;
use App\Http\Requests\UpdateAvaliacaoRequest;
use App\Models\Avaliacao;

class AvaliacaoController extends Controller
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
     * @param  \App\Http\Requests\StoreAvaliacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvaliacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function show(Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvaliacaoRequest  $request
     * @param  \App\Models\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvaliacaoRequest $request, Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avaliacao $avaliacao)
    {
        //
    }
}
