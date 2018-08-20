<?php

use App\Passport;
use App\Vegetable;
use Illuminate\Database\Seeder;

class VegetablePassportDefaults extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passport::whereNotNull('id')->update([
            'distribution_status' => 'Not Available',
            'collecting_site' => 'PURWAKARTA',
        ]);
        
        Vegetable::whereNotNull('id')->update(['accession_number' => 'Not Available']);
    }
}
