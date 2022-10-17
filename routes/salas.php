<?php

use App\Http\Controllers\SalaController;
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
        Route::get('/{sala}/diario', 'diario')->name('diario');
        Route::get('/{sala}', 'edit')->name('show');
        Route::get('/matricular', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{sala}/editar', 'edit')->name('edit');
        Route::put('/{sala}/update', 'update')->name('update');
        Route::delete('/destroy', 'destroy')->name('destroy');

        // Other Actions

    });
});



