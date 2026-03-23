<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

//GET - listar os usuarios cadastrados
Route::get('/aluno/listar',[AlunoController::class, 'listar'])->name('aluno.listar');

