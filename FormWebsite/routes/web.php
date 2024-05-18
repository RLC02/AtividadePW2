<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/Sobrenos', function () {
    return view('Sobrenos');
})->name('Sobrenos');

Route::post('/contato', [ContatoController::class, 'contato'])->name('contato');
