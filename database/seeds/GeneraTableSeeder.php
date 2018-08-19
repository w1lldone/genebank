<?php

use App\Genus;
use App\Species;
use Illuminate\Database\Seeder;

class GeneraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genus::create(['name' => 'Vigna'])->species()->createMany([
            ['name' => 'unguiculata'],
        ]);

        Genus::create(['name' => 'Capsicum'])->species()->createMany([
            ['name' => 'annuum'],
            ['name' => 'frutescens'],
        ]);

        Genus::create(['name' => 'Cucumis'])->species()->createMany([
            ['name' => 'sativus'],
        ]);

        Genus::create(['name' => 'Solanum'])->species()->createMany([
            ['name' => 'melongena'],
        ]);
    }
}
