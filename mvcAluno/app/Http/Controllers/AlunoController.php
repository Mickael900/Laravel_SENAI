<?php

// estou no alunoController.php
namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Routing\Controller;

class AlunoController extends Controller
{
    public function listar(){
        $query = Aluno::query();
        $alunos = $query->get();
        return view('listar', compact('alunos'));
    }
}