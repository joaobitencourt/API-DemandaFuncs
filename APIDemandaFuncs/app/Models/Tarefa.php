<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'due_date',
    ];

    //(1,1)
    public function funcionario(){

        return $this->belongsTo(Funcionario::class);

    }

}
