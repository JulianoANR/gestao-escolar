<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/componentes', function () {
    return view('template.components');
})->middleware(['auth'])->name('components');

Route::middleware(['auth'])->prefix('configuracoes')->group(function () {

    Route::get('/', function () {
        return view('configuracoes.perfil');
    })->name('configuracoes.perfil');

    Route::get('/preferencias', function () {
        return view('configuracoes.preferences');
    })->name('configuracoes.preferencias');

    Route::get('/escola', function () {
        return view('configuracoes.school');
    })->name('configuracoes.school');
});

require __DIR__.'/auth.php';
