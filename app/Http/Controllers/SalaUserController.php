<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSalaUserRequest;
use App\Http\Requests\UpdateSalaUserRequest;
use App\Models\SalaUser;

class SalaUserController extends Controller
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
     * @param  \App\Http\Requests\StoreSalaUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalaUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalaUser  $salaUser
     * @return \Illuminate\Http\Response
     */
    public function show(SalaUser $salaUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalaUser  $salaUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SalaUser $salaUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalaUserRequest  $request
     * @param  \App\Models\SalaUser  $salaUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalaUserRequest $request, SalaUser $salaUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalaUser  $salaUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalaUser $salaUser)
    {
        //
    }
}
