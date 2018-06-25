<?php

namespace App\Http\Resources\Traits;

/**
 * With status API resource trait
 */
trait WithStatus
{
    public function with($request)
    {
        return [
            'status' => 'success'
        ];
    }
}
