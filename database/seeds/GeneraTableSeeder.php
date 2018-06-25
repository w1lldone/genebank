<?php

use App\Genus;
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
        Genus::create(['name' => 'Vigna']);

        Genus::create(['name' => 'Capsicum'])->species()->createMany([
            ['name' => 'annuum'],
            ['name' => 'baccatum'],
            ['name' => 'chinense'],
            ['name' => 'frutescens'],
            ['name' => 'pubescens'],
        ]);

        Genus::create(['name' => 'Cucumis']);

        Genus::create(['name' => 'Solanum']);
    }
}
