<?php

use App\Http\Controllers\API\AtividadeControllerAPI;
use App\Http\Controllers\AtividadeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Students Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register students web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
| Prefix: /atividade
*/

Route::controller(AtividadeController::class)->as('atividades.')->group(function ()
{
    Route::middleware(['auth'])->group(function ()
    {
        // Crud Actions
        Route::get('/', 'index')->name('index');
        Route::get('/nova-atividade', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/visualizar-atividade/{atividade}', 'show')->name('show');
        Route::get('/{atividade}/editar', 'edit')->name('edit');
        Route::put('/{aluno}/update', 'update')->name('update');
        Route::delete('/destroy', 'destroy')->name('destroy');

        // Other Actions

    });
});


Route::controller(AtividadeControllerAPI::class)->as('api.atividades.')->group(function ()
{
    Route::middleware(['auth:sanctum'])->group(function ()
    {
        // Crud Actions
        Route::post('/update', 'update')->name('update');

        // Other Actions

    });
});
