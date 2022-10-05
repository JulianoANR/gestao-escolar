<?php

use App\Http\Controllers\QueuesController;
use App\Http\Controllers\UserController;
use App\Services\Sed\AuthService;
use App\Services\Sed\Escolas\GetEscolasService;
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

Route::middleware(['auth'])->prefix('queue')->group(function () {
    Route::get('/send-mail', [QueuesController::class, 'sendMail'])
        ->name('queue');
});

Route::controller(['auth'])->prefix('usuario')->group(function() {
    Route::get('/configuracoes', [UserController::class, 'edit'])
        ->name('user.edit');

    Route::post('/configuracoes', [UserController::class, 'update'])
        ->name('user.update');

    Route::get('/preferencias', [UserController::class, 'preferences'])
        ->name('user.preferences');

    Route::get('/sections', [UserController::class, 'sections'])
        ->name('user.sections');

    Route::get('/acoes', [UserController::class, 'logs'])
        ->name('user.logs');
});

require __DIR__.'/auth.php';
