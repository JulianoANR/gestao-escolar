<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurriculoRequest;
use App\Http\Requests\UpdateCurriculoRequest;
use App\Models\Curriculo;

class CurriculoController extends Controller
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
     * @param  \App\Http\Requests\StoreCurriculoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurriculoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculo $curriculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculo $curriculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCurriculoRequest  $request
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurriculoRequest $request, Curriculo $curriculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculo $curriculo)
    {
        //
    }
}
