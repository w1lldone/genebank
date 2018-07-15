<?php

namespace App\Observers;

use App\Attribute;
use App\Genus;
use App\Vegetable;

/**
 * Vegetable Observer
 */
class VegetableObserver
{
    public function created(Vegetable $vegetable)
    {
        // GENERATE PLANT INTRODUCTION NUMBER
        $vegetable->update([
            'plant_introduction_number' => $vegetable->generatePIN(),
        ]);

        // Get array of characters name based related to genus name
        $fields = Genus::charactersList($vegetable->species->genus->name);
        // Get array of characters id
        $characters = Attribute::whereIn('name', $fields)->get()->pluck('id');
        // attach the character id to vegetable
        $vegetable->attributes()->attach($characters);

        // ADD PASSPORT TO VEGETABLE
        $vegetable->passport()->create([]);
    }
}
