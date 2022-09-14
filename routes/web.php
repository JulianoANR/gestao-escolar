<?php

use App\Service\Sed\AuthService;
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

    $teste = new AuthService;

    $teste->generateAccessToken();

})->middleware(['auth'])->name('dashboard');

Route::get('/componentes', function () {
    return view('template.components');
})->middleware(['auth'])->name('components');

Route::middleware(['auth'])->prefix('configuracoes')->group(function () {

    Route::get('/', function () {
        return view('settings.profile');
    })->name('settings.profile');

    Route::get('/preferencias', function () {
        return view('settings.preferences');
    })->name('settings.preferences');

    Route::get('/escola', function () {
        return view('settings.school');
    })->name('settings.school');
});

require __DIR__.'/auth.php';
