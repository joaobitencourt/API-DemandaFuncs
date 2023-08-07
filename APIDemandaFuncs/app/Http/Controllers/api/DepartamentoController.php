<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateDepartamentoRequest;
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

    public function store(StoreUpdateDepartamentoRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $departamento = $this->departamento->create($data);

        return new DepartamentosResource($departamento);
    }

    public function show(string $id)
    {
        $departamento = $this->departamento->findOrFail($id);
        return new DepartamentosResource($departamento);

    }

}
