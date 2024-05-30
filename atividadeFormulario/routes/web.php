<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/sobrenos', function () {
    return view('sobrenos');
});

Route::get('/contato', function () {
    return view('contato');
});


Route::post('/contato', [ContatoController::class, 'contato'])->name('contato');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
