<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

/*
|--------------------------------------------------------------------------
| Students Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register students web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
| Prefix: /alunos
*/

Route::controller(AlunoController::class)->as('alunos.')->group(function ()
{
    Route::middleware(['auth'])->group(function ()
    {
        // Crud Actions
        Route::get('/', 'index')->name('index');
        Route::get('/{aluno}', 'edit')->name('show');
        Route::get('/matricular', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{aluno}/editar', 'edit')->name('edit');
        Route::put('/{aluno}/update', 'update')->name('update');
        Route::delete('/destroy', 'destroy')->name('destroy');

        // Other Actions

    });
});
