<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Character'])->childern()->createMany([
            ['name' => 'Seedling'],
            ['name' => 'Vegetative'],
            ['name' => 'Inflorescence'],
            ['name' => 'Fruit'],
            ['name' => 'Seed'],
        ]);
    }
}
