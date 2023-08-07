<?php

use App\Http\Controllers\api\DepartamentoController;
use App\Http\Controllers\api\FuncionarioController;
use App\Http\Controllers\api\TarefasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//rota padrão
Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});

//Departamento

Route::apiResource('departamentos', DepartamentoController::class);

//Funcionarios

Route::apiResource('funcionarios', FuncionarioController::class);

//Tarefas

Route::apiResource('tarefas', TarefasController::class);
