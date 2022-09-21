<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGestorRequest;
use App\Http\Requests\UpdateGestorRequest;
use App\Models\Gestor;

class GestorController extends Controller
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
     * @param  \App\Http\Requests\StoreGestorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGestorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function show(Gestor $gestor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestor $gestor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGestorRequest  $request
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGestorRequest $request, Gestor $gestor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestor $gestor)
    {
        //
    }
}
