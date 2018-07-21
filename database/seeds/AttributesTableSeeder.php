<?php

use App\Category;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::where('name', 'Seedling')->first()->attributes()->createMany([
            ['name' => 'Hypocotil color', 'type' => 'string'],
            ['name' => 'Cotyledon leaf color', 'type' => 'string'],
            ['name' => 'Cotyledon leaf shape', 'type' => 'string'],
            ['name' => 'Anthocyanin Level', 'type' => 'string'],
        ]);

        Category::where('name', 'Vegetative')->first()->attributes()->createMany([
            ['name' => 'Plant Habit', 'type' => 'string'],
            ['name' => 'Stem color', 'type' => 'string'],
            ['name' => 'Stem diameter', 'type' => 'numeric'],
            ['name' => 'Branching habit', 'type' => 'string'],
            ['name' => 'Height of first branch', 'type' => 'string'],
            ['name' => 'Leaf shape', 'type' => 'string'],
            ['name' => 'Leaf Margin', 'type' => 'string'],
            ['name' => 'Leaf Color', 'type' => 'string'],
            ['name' => 'Leaf Length', 'type' => 'numeric'],
            ['name' => 'Leaf Width', 'type' => 'numeric'],
            ['name' => 'Petiole Length', 'type' => 'numeric'],
            ['name' => 'Leaf surface', 'type' => 'string'],
            ['name' => 'Growth habit (climbing/dwarf)', 'type' => 'string'],
            ['name' => 'Plant vigor', 'type' => 'string'],
            ['name' => 'No. of side branches', 'type' => 'string'],
            ['name' => 'Tendril', 'type' => 'string'],
            ['name' => 'Climbing ability', 'type' => 'string'],
            ['name' => 'Internode length', 'type' => 'numeric'],
            ['name' => 'Spines on Leaf', 'type' => 'string'],
            ['name' => 'Leaf Hairiness', 'type' => 'string'],
            ['name' => 'Petiole Color', 'type' => 'string'],
            ['name' => 'Plant Height', 'type' => 'numeric'],
            ['name' => 'Spines on Stem', 'type' => 'string'],
            ['name' => 'Internode Length', 'type' => 'numeric'],
        ]);

        Category::where('name', 'Inflorescence')->first()->attributes()->createMany([
            ['name' => 'Days to Flowering', 'type' => 'string'],
            ['name' => 'No. of pedicles per axil', 'type' => 'string'],
            ['name' => 'Flower Shape', 'type' => 'string'],
            ['name' => 'Sepal Color', 'type' => 'string'],
            ['name' => 'Petal Color', 'type' => 'string'],
            ['name' => 'Stamen Color', 'type' => 'string'],
            ['name' => 'Pistil Color', 'type' => 'string'],
            ['name' => 'Stigma Position', 'type' => 'string'],
            ['name' => 'Flower type', 'type' => 'string'],
            ['name' => 'Ovary shape', 'type' => 'string'],
            ['name' => 'Ovary color', 'type' => 'string'],
            ['name' => 'Sex ratio (F/M)', 'type' => 'string'],
        ]);

        Category::where('name', 'Seed')->first()->attributes()->createMany([
            ['name' => 'Seed Shape', 'type' => 'string'],
            ['name' => 'Seed color', 'type' => 'string'],
            ['name' => 'Seed Size', 'type' => 'numeric'],
            ['name' => '100 Seed Weight', 'type' => 'numeric'],
            ['name' => 'Seed hilum size', 'type' => 'numeric'],
            ['name' => 'Seed hilum color', 'type' => 'string'],
            ['name' => 'Seed Size (l x d)', 'type' => 'string'],
            ['name' => 'Seed Size (l x w)', 'type' => 'string'],
        ]);

        Category::where('name', 'Fruit')->first()->attributes()->createMany([
            ['name' => 'Days to Fruit', 'type' => 'numeric'],
            ['name' => 'No. of Fruits set per axil', 'type' => 'numeric'],
            ['name' => 'Immature Fruit color', 'type' => 'string'],
            ['name' => 'Mature Fruit Color', 'type' => 'string'],
            ['name' => 'Anthocyanin spot in unripe stage', 'type' => 'numeric'],
            ['name' => 'Pedicle color', 'type' => 'string'],
            ['name' => 'Fruit Length', 'type' => 'numeric'],
            ['name' => 'Fruit Diamater', 'type' => 'numeric'],
            ['name' => 'Fruit size ratio', 'type' => 'string'],
            ['name' => 'Fruit Shape', 'type' => 'string'],
            ['name' => 'Fruit tip/end shape', 'type' => 'string'],
            ['name' => 'Fruit wall thickness', 'type' => 'string'],
            ['name' => 'Fruit weight', 'type' => 'numeric'],
            ['name' => 'Harvest Time', 'type' => 'string'],
            ['name' => 'Fruit Firmness', 'type' => 'string'],
            ['name' => 'Fruit pungency', 'type' => 'string'],
            ['name' => 'Number of Locules', 'type' => 'string'],
            ['name' => 'Pod Length', 'type' => 'numeric'],
            ['name' => 'Pod Diameter', 'type' => 'numeric'],
            ['name' => 'Pod Shape', 'type' => 'string'],
            ['name' => 'Pod curvature', 'type' => 'string'],
            ['name' => 'Beak length', 'type' => 'numeric'],
            ['name' => 'Beak color', 'type' => 'string'],
            ['name' => 'Pod glossiness', 'type' => 'string'],
            ['name' => 'Pod weight', 'type' => 'numeric'],
            ['name' => 'Days to harvesting mature stage', 'type' => 'string'],
            ['name' => 'No.of pod per pedicle', 'type' => 'numeric'],
            ['name' => 'No. of seeds per pod', 'type' => 'string'],
            ['name' => 'Immature/Fresh pod color', 'type' => 'string'],
            ['name' => 'Mature pod Color', 'type' => 'string'],
            ['name' => 'Fruit skin color', 'type' => 'string'],
            ['name' => 'Fruit skin glossiness', 'type' => 'string'],
            ['name' => 'Fruit stripe color', 'type' => 'string'],
            ['name' => 'Fruit spines', 'type' => 'string'],
            ['name' => 'Fruit flesh thickness', 'type' => 'string'],
            ['name' => 'Fruit cavity', 'type' => 'string'],
            ['name' => 'Flesh color', 'type' => 'string'],
            ['name' => 'Fruit bitterness', 'type' => 'string'],
            ['name' => 'No. of locules', 'type' => 'numeric'],
            ['name' => 'Fruit Aroma', 'type' => 'string'],
            ['name' => 'Fruit storability', 'type' => 'string'],
            ['name' => 'Fresh Fruit color', 'type' => 'string'],
            ['name' => 'Harvest Fruit Color', 'type' => 'string'],
            ['name' => 'Fruit Type', 'type' => 'string'],
            ['name' => 'No. of Fruits set per inflorescence', 'type' => 'numeric'],
            ['name' => 'Pedicle thickness', 'type' => 'string'],
            ['name' => 'Spine on pedicle', 'type' => 'string'],
            ['name' => 'Pedicle length', 'type' => 'numeric'],
            ['name' => 'Fruit position', 'type' => 'string'],
            ['name' => 'Fruit apex shape', 'type' => 'string'],
            ['name' => 'Flesh Flavour', 'type' => 'string'],
        ]);
    }
}
