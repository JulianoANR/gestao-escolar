<?php

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
        Route::get('/{atividade}', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::get('/{atividade}/editar', 'edit')->name('edit');
        Route::put('/{aluno}/update', 'update')->name('update');
        Route::delete('/destroy', 'destroy')->name('destroy');

        // Other Actions

    });
});
