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

Route::get('/components', function () {
    return view('template.components');
})->middleware(['auth'])->name('components');

Route::prefix('settings')->group(function () {

    Route::get('/', function () {
        return view('settings.account');
    })->middleware(['auth'])->name('settings.account_data');

    Route::get('/preferences', function () {
        return view('settings.preferences');
    })->middleware(['auth'])->name('settings.preferences');

    Route::get('/company', function () {
        return view('settings.company');
    })->middleware(['auth'])->name('settings.company_data');
});

require __DIR__.'/auth.php';
