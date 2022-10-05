<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSondagemRequest;
use App\Http\Requests\UpdateSondagemRequest;
use App\Models\Sondagem;

class SondagemController extends Controller
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
     * @param  \App\Http\Requests\StoreSondagemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSondagemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sondagem  $sondagem
     * @return \Illuminate\Http\Response
     */
    public function show(Sondagem $sondagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sondagem  $sondagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Sondagem $sondagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSondagemRequest  $request
     * @param  \App\Models\Sondagem  $sondagem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSondagemRequest $request, Sondagem $sondagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sondagem  $sondagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sondagem $sondagem)
    {
        //
    }
}
