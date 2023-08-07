<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DepartamentosResource;
use \App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function __construct(protected  Departamento $departamento,)
    {
    }

    public function index()
    {
        $departamentos = $this->departamento->paginate();
        return DepartamentosResource::collection($departamentos);
    }

}
