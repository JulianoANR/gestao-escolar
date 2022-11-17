<?php

use App\Services\Sed\AuthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QueuesController;
use App\Http\Controllers\SessionController;
use App\Services\Salas\GetSelectedClassroom;
use App\Services\Sed\Escolas\GetEscolasService;

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
    $user = Auth::user();
    $salas = $user->salas()->withPivot('disciplina_id')->get();
    $salaSelecionada = GetSelectedClassroom::handle($user);
    return view('dashboard', compact('user', 'salas', 'salaSelecionada'));
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

// API

Route::controller(SessionController::class)
        ->prefix('session')
        ->group(function () {
            Route::middleware(['auth'])->group(function () {
                Route::post('/change-class', 'changeClassroom')->name('update.classroom');
            });
});


require __DIR__.'/auth.php';
