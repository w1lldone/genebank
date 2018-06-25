<?php

namespace App\Observers;

use App\Vegetable;

/**
 * Vegetable Observer
 */
class VegetableObserver
{
    public function created(Vegetable $vegetable)
    {
        // Attach the characters to vegetable
        switch ($vegetable->species_id) {
            case 2:
                $characters = range(1, 39);
                break;
            
            default:
                $characters = [];
                break;
        }
        
        $vegetable->characters()->attach($characters);
    }
}
