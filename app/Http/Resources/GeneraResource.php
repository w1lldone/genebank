<?php

namespace App\Http\Resources;

use App\Http\Resources\Traits\WithStatus;
use Illuminate\Http\Resources\Json\JsonResource;

class GeneraResource extends JsonResource
{
    use WithStatus;
    
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'photo' => url($this->photo.'?v=2'),
            'vegetables_count' => $this->whenLoaded('vegetables', $this->vegetables()->count()),
            'species' => $this->whenLoaded('species'),
        ];
    }
}
