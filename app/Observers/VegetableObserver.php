<?php

namespace App\Observers;

use App\Character;
use App\Genus;
use App\Vegetable;

/**
 * Vegetable Observer
 */
class VegetableObserver
{
    public function created(Vegetable $vegetable)
    {
        $fields = Genus::charactersList($vegetable->species->genus->name);
        $characters = Character::whereIn('name', $fields)->get()->pluck('id');

        $vegetable->characters()->attach($characters);
    }
}
