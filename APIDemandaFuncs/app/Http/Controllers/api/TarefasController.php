<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpadateTarefasRequests;
use App\Http\Resources\TarefasResource;
use App\Models\Tarefa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function __construct(protected  Tarefa $tarefa,)
    {
    }

    //show all Tarefas
    public function index()
    {
        $tarefas = $this->tarefa->paginate();
        return TarefasResource::collection($tarefas);
    }

    //create an Tarefas
    public function store(StoreUpadateTarefasRequests $request)
    {
        $data = $request->all();
        $data ['due_date'] = Carbon::make($request->due_date)->format('Y-m-d');

        $tarefa = $this->tarefa->create($data);

        return new TarefasResource($tarefa);
    }

    //show expecific tarefa
    public function show(string $id)
    {
        
        $tarefa = $this->tarefa->findOrFail($id);
        return new TarefasResource($tarefa);

    }
}
