<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateFuncionariosRequest;
use App\Http\Resources\FuncionariosResource;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function __construct(protected  Funcionario $funcionario,)
    {
    }

    //show all funcionarios
    public function index()
    {
        $funcionarios = $this->funcionario->paginate();
        return FuncionariosResource::collection($funcionarios);
    }

    //create an funcionario
    public function store(StoreUpdateFuncionariosRequest $request)
    {
        $data = $request->all();

        $funcionario = $this->funcionario->create($data);
        return new FuncionariosResource($funcionario);
    }
}
