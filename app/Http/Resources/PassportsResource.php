<?php

namespace App\Http\Resources;

use App\Http\Resources\Traits\WithStatus;
use Illuminate\Http\Resources\Json\JsonResource;

class PassportsResource extends JsonResource
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
            'donor_number' => $this->donor_number,
            'distribution_status' => 'available',
            'country' => $this->country,
            'location' => $this->location,
            'collecting_institute' => $this->collecting_institute,
            'collector' => $this->collector,
            'collecting_number' => $this->collecting_number,
            'collecting_date' => $this->collecting_date,
            'latitide' => $this->latitide,
            'longitude' => $this->longitude,
            'altitude' => $this->altitude,
        ];
    }
}
