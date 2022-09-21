<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCalendarioRequest;
use App\Http\Requests\UpdateCalendarioRequest;
use App\Models\Calendario;

class CalendarioController extends Controller
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
     * @param  \App\Http\Requests\StoreCalendarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCalendarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function show(Calendario $calendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendario $calendario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCalendarioRequest  $request
     * @param  \App\Models\Calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCalendarioRequest $request, Calendario $calendario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendario $calendario)
    {
        //
    }
}
