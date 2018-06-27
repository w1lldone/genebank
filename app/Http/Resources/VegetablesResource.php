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
            'species_id' => $this->species_id,
            'cultivar_name' => $this->cultivar_name,
            'donor_number' => $this->donor_number,
            'country' => $this->country,
            'location' => $this->location,
            'year' => $this->year,
            'season' => $this->season,
            'plant_introduction_number' => $this->plant_introduction_number,
            'collecting_institute' => $this->collecting_institute,
            'collector' => $this->collector,
            'collecting_number' => $this->collecting_number,
            'latitide' => $this->latitide,
            'longitude' => $this->longitude,
            'altitude' => $this->altitude,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
            'characters' => $this->when($this->hasView('characters'), CharactersResource::collection($this->getCharacters())),
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
