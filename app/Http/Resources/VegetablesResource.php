<?php

namespace App\Http\Resources;

use App\Category;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class VegetablesResource extends JsonResource
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
            'species' => new SpeciesResource($this->species),
            'cultivar_name' => $this->cultivar_name,
            'temporary_number' => $this->temporary_number,
            'plant_introduction_number' => $this->plant_introduction_number,
            'photo' => Storage::disk('public')->url($this->photo),
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
            'characters' => AttributesResource::collection($this->whenLoaded('characters')),
            'evaluations' => AttributesResource::collection($this->whenLoaded('evaluations')),
            'passport' => new PassportsResource($this->whenLoaded('passport')),
        ];
    }

    public function hasView($key = '')
    {
        $viewsList = collect($this->getViews());

        return $viewsList->search($key) !== false;
    }

    public function getViews()
    {
        return explode(',', request('view'));
    }
}
