<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable =[
        'firstName',
        'lastName',
        'email',
        'phone',
    ];

    //(1,1)
    public function departament(){

        return $this->belongsTo(Departamento::class);

    }

    //(1,n)
    public function tarefas(){

        return $this->hasMany(Tarefa::class);

    }

}
