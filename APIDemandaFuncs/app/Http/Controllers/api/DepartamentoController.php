<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateDepartamentoRequest;
use App\Http\Resources\DepartamentosResource;
use \App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DepartamentoController extends Controller
{
    public function __construct(protected  Departamento $departamento,)
    {
    }

    //show all departments
    public function index()
    {
        $departamentos = $this->departamento->paginate();
        return DepartamentosResource::collection($departamentos);
    }

    //create an department
    public function store(StoreUpdateDepartamentoRequest $request)
    {
        $data = $request->all();

        $departamento = $this->departamento->create($data);

        return new DepartamentosResource($departamento);
    }

    //show expecific department
    public function show(string $id)
    {
        $departamento = $this->departamento->findOrFail($id);
        return new DepartamentosResource($departamento);

    }

    //Update expecific department
    public function update(StoreUpdateDepartamentoRequest $request, string $id){
        $departamento = $this->departamento->findOrFail($id);

        $data = $request->validated();

        $departamento->update($data);

        return new DepartamentosResource($departamento);

    }

    //Delete expecific department
    public function destroy(string $id){
        $this->departamento->findOrFail($id)->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }

}
