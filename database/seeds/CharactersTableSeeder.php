<?php

use App\Category;
use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::where('name', 'Seedling')->first()->characters()->createMany([
            ['name' => 'Hypocotil color', 'type' => 'string'],
            ['name' => 'Cotyledon leaf color', 'type' => 'string'],
            ['name' => 'Cotyledon leaf shape', 'type' => 'string'],
        ]);

        Category::where('name', 'Vegetative')->first()->characters()->createMany([
            ['name' => 'Growth habit', 'type' => 'string'],
            ['name' => 'Stem color', 'type' => 'string'],
            ['name' => 'Leaf shape', 'type' => 'string'],
            ['name' => 'Leaf Margin', 'type' => 'string'],
            ['name' => 'Leaf surface', 'type' => 'string'],
            ['name' => 'Leaf Color', 'type' => 'string'],
            ['name' => 'Leaf Length', 'type' => 'integer'],
            ['name' => 'Leaf Width', 'type' => 'integer'],
            ['name' => 'Petiole Length', 'type' => 'string'],
        ]);

        Category::where('name', 'Inflorescence')->first()->characters()->createMany([
            ['name' => 'Days to Flowering', 'type' => 'string'],
            ['name' => 'Flower Shape', 'type' => 'string'],
            ['name' => 'Sepal Color', 'type' => 'string'],
            ['name' => 'Petal Color', 'type' => 'string'],
            ['name' => 'Stamen Color', 'type' => 'string'],
            ['name' => 'Pistil Color', 'type' => 'string'],
        ]);

        Category::where('name', 'Seed')->first()->characters()->createMany([
            ['name' => 'Seed Shape', 'type' => 'string'],
            ['name' => 'Seed color', 'type' => 'string'],
            ['name' => 'Seed Size', 'type' => 'string'],
            ['name' => 'Seed hilum size', 'type' => 'numeric'],
            ['name' => 'Seed hilum color', 'type' => 'string'],
            ['name' => '100 Seed Weight', 'type' => 'numeric'],
        ]);

        Category::where('name', 'Fruit')->first()->characters()->createMany([
            ['name' => 'Immature/Fresh pod color', 'type' => 'string'],
            ['name' => 'Mature pod Color', 'type' => 'string'],
            ['name' => 'Pedicle color', 'type' => 'string'],
            ['name' => 'Pedicle length', 'type' => 'numeric'],
            ['name' => 'Pod Length', 'type' => 'numeric'],
            ['name' => 'Pod Diameter', 'type' => 'numeric'],
            ['name' => 'Pod Shape', 'type' => 'string'],
            ['name' => 'Pod curvature', 'type' => 'string'],
            ['name' => 'Beak length', 'type' => 'numeric'],
            ['name' => 'Beak color', 'type' => 'string'],
            ['name' => 'Pod glossiness', 'type' => 'string'],
            ['name' => 'Pod weight', 'type' => 'numeric'],
            ['name' => 'Days to harvesting mature stage', 'type' => 'numeric'],
            ['name' => 'No.of pod per pedicle', 'type' => 'numeric'],
            ['name' => 'No. of seeds per pod', 'type' => 'numeric'],
        ]);
    }
}
