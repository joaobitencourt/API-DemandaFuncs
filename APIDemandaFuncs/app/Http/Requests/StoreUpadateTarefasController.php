<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreUpadateTarefasController extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $rules = [
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'assignee_id' => 'required|min:1|max:11',
            'due_date' => 'nullable|date',
        ];

        return $rules;
    }
}
