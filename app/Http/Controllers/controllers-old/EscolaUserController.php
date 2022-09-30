<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEscolaUserRequest;
use App\Http\Requests\UpdateEscolaUserRequest;
use App\Models\EscolaUser;

class EscolaUserController extends Controller
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
     * @param  \App\Http\Requests\StoreEscolaUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEscolaUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EscolaUser  $escolaUser
     * @return \Illuminate\Http\Response
     */
    public function show(EscolaUser $escolaUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EscolaUser  $escolaUser
     * @return \Illuminate\Http\Response
     */
    public function edit(EscolaUser $escolaUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEscolaUserRequest  $request
     * @param  \App\Models\EscolaUser  $escolaUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEscolaUserRequest $request, EscolaUser $escolaUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EscolaUser  $escolaUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(EscolaUser $escolaUser)
    {
        //
    }
}
