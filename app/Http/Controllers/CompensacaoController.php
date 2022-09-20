<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompensacaoRequest;
use App\Http\Requests\UpdateCompensacaoRequest;
use App\Models\Compensacao;

class CompensacaoController extends Controller
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
     * @param  \App\Http\Requests\StoreCompensacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompensacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compensacao  $compensacao
     * @return \Illuminate\Http\Response
     */
    public function show(Compensacao $compensacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compensacao  $compensacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Compensacao $compensacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompensacaoRequest  $request
     * @param  \App\Models\Compensacao  $compensacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompensacaoRequest $request, Compensacao $compensacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compensacao  $compensacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compensacao $compensacao)
    {
        //
    }
}
