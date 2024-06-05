<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('index');
});

Route::post('/cadastrar', [ContatoController::class, 'cadastrar']);
Route::get("/", [ContatoController::class, "index"]);
Route::post("/adicionar", [ContatoController::class, "adicionar"]);
Route::get("/editar/{id}", [ContatoController::class, "editar"]);
Route::post("/atualizar/{id}", [ContatoController::class, "atualizar"]);
Route::get("/excluir/{id}", [ContatoController::class, "excluir"]);