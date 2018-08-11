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
            'incoming_date' => optional($this->incoming_date)->toDateString(),
            'donor_number' => $this->donor_number,
            'donor_institute' => $this->donor_institute,
            'donor_address' => $this->donor_address,
            'sender_name' => $this->sender_name,
            'collector' => $this->collector,
            'collecting_date' => optional($this->collecting_date)->toDateString(),
            'collecting_institute' => $this->collecting_institute,
            'collecting_number' => $this->collecting_number,
            'province' => $this->province,
            'location' => $this->location,
            'country' => $this->country,
            'latitide' => $this->latitide,
            'longitude' => $this->longitude,
            'altitude' => $this->altitude,
            'season' => $this->season,
            'distribution_status' => $this->distribution_status,
        ];
    }
}
