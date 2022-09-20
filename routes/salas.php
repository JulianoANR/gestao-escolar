<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Schools Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register students web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
| Prefix: /escolas
*/


Route::controller(SalaController::class)->as('salas.')->group(function ()
{
    Route::middleware(['auth'])->group(function ()
    {
        // Crud Actions
        Route::get('/', 'index')->name('index');
        Route::get('/{sala}', 'edit')->name('show');
        Route::get('/matricular', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{sala}/editar', 'edit')->name('edit');
        Route::put('/{sala}/update', 'store')->name('store');
        Route::delete('/destroy', 'destroy')->name('destroy');

        // Other Actions

    });
});



