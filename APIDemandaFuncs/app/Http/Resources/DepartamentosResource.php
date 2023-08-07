<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class DepartamentosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //padronizando como vira o retorno
        return [
            'identify' => $this->id,
            'name' => $this->name,
            'created' => Carbon::make($this->created_at)->format('Y-m-d'),
        ];
    }
}
