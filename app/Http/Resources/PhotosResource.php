<?php

namespace App\Http\Resources;

use App\Http\Resources\Traits\WithStatus;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotosResource extends JsonResource
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
            'url' => $this->photoUrl,
        ];
    }
}
