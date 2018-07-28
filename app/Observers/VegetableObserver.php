<?php

namespace App\Observers;

use App\Attribute;
use App\Category;
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

        // Get evaluation category ids
        $categories = Category::getEvaluationCharacters();
        // Get evaluation attribute id
        $evaluations = Attribute::whereIn('category_id', $categories)->pluck('id');

        // Merge evaluation id with character id
        $attributes = $evaluations->merge($characters);

        // attach the attribute id to vegetable
        $vegetable->attributes()->attach($attributes);

        // ADD PASSPORT TO VEGETABLE
        $vegetable->passport()->create([]);
    }
}
