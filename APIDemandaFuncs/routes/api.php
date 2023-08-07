<?php

use App\Http\Controllers\api\DepartamentoController;
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
