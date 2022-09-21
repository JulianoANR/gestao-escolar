<?php

use App\Http\Controllers\EscolaController;
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


Route::controller(EscolaController::class)->as('escolas.')->group(function ()
{
    Route::middleware(['auth'])->group(function ()
    {
        // Crud Actions
        Route::get('/', 'index')->name('index');
        Route::get('/{escola}', 'edit')->name('show');
        Route::get('/criar', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{escola}/editar', 'edit')->name('edit');
        Route::put('/{escola}/update', 'update')->name('update');
        Route::delete('/destroy', 'destroy')->name('destroy');

        // Other Actions

    });
});



