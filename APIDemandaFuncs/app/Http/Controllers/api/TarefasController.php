<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TarefasResource;
use App\Models\Tarefa;
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
}
