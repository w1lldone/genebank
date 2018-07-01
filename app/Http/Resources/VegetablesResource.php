<?php

namespace App\Http\Resources;

use App\Category;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
            'characters' => $this->when($this->hasView('characters'), CharactersResource::collection($this->getCharacters())),
            'passport' => $this->when($this->hasView('passport'), $this->passport),
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
