<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEscolaRequest;
use App\Http\Requests\UpdateEscolaRequest;
use App\Services\Sed\Escolas\GetEscolasService;
use App\Models\Escola;

class EscolaController extends Controller
{
    public function __construct(
        protected Escola $escola,
        protected GetEscolasService $getEscolasService
    ){}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teste = ($this->getEscolasService)();
        // dd('construtor', $teste);

        // return $this->escola->all();
        return view('schools.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEscolaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEscolaRequest $request)
    {
        return redirect()->route('escolas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function show(Escola $escola)
    {
        return view('schools.show', compact('escola'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function edit(Escola $escola)
    {
        return view('schools.edit', compact('escola'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEscolaRequest  $request
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEscolaRequest $request, Escola $escola)
    {
        return redirect()->route('escolas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escola $escola)
    {
        return redirect()->route('escolas.index');
    }
}
