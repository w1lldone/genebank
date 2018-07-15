<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributesResource extends JsonResource
{
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
            'category' => $this->category->name,
            'type' => $this->type,
            'unit' => $this->unit,
            'value' => $this->whenPivotLoaded('attribute_vegetable', function () {
                return $this->pivot->value;
            }),
        ];
    }
}
