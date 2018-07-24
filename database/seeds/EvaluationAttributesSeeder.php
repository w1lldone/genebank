<?php

use App\Category;
use Illuminate\Database\Seeder;

class EvaluationAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Evaluation'])->childern()->createMany([
            ['name' => 'Nutritive Value'],
            ['name' => 'Abiotic Stress Tolerance'],
            ['name' => 'Insect Pest Resistance'],
            ['name' => 'Bacterial Resistance'],
            ['name' => 'Fungal Resistance'],
            ['name' => 'Virus Resistance'],
        ]);

        Category::where('name', 'Nutritive Value')->first()->attributes()->createMany([
            ['name' => 'Total phenolic', 'type' => 'numeric', 'unit' => 'mg/100g', 'description' => 'by Folin-Denis Method'],
            ['name' => 'Anti-oxidant activity', 'type' => 'numeric', 'unit' => '%', 'description' => 'by Modified Thiocyanate Method'],
            ['name' => 'Anti-oxidant activity', 'type' => 'numeric', 'unit' => '%', 'description' => 'by DPPH Method'],
            ['name' => 'Dry matter', 'unit' => '%', 'type' => 'numeric'],
            ['name' => 'Sugar', 'unit' => '%', 'type' => 'numeric'],
            ['name' => 'Color value', 'unit' => '*100', 'type' => 'numeric'],
            ['name' => 'Lipid', 'unit' => '%', 'type' => 'numeric'],
            ['name' => 'Capsacin', 'unit' => 'mg/g', 'type' => 'numeric'],
            ['name' => 'Alkalinity', 'unit' => 'pH', 'type' => 'numeric'],
            ['name' => 'Soluble solids', 'unit' => 'Brix', 'type' => 'numeric'],
            ['name' => 'Acidity', 'unit' => '% Citric acid', 'type' => 'numeric'],
            ['name' => 'Total solids', 'type' => 'numeric'],
            ['name' => 'Beta carotene', 'unit' => 'mg/100g', 'type' => 'numeric'],
            ['name' => 'Fiber', 'unit' => '%', 'type' => 'numeric'],
            ['name' => 'Vitamin A', 'unit' => 'mg/100g', 'type' => 'numeric'],
            ['name' => 'Vitamin C', 'unit' => 'mg/100g', 'type' => 'numeric'],
            ['name' => 'Ascorbic acid', 'unit' => 'mg/100g', 'type' => 'numeric'],
            ['name' => 'Total oil content', 'unit' => '%', 'type' => 'numeric'],
            ['name' => 'Protein content', 'unit' => '%', 'type' => 'numeric'],
            ['name' => 'Starch content', 'unit' => '%', 'type' => 'numeric'],
        ]);

        Category::where('name', 'Abiotic Stress Tolerance')->first()->attributes()->createMany([
            ['name' => 'Heat tolerance', 'type' => 'string'],
            ['name' => 'Cold tolerance', 'type' => 'string'],
            ['name' => 'Drought tolerance', 'type' => 'string'],
            ['name' => 'Flooding tolerance', 'type' => 'string'],
            ['name' => 'Salinity tolerance', 'type' => 'string'],
        ]);

        Category::where('name', 'Insect Pest Resistance')->first()->attributes()->createMany([
            ['name' => 'Dacus cucurbita (melon fly)', 'type' => 'string'],
            ['name' => 'Callosobruchus chinensis (bruchid beetle)', 'type' => 'string'],
            ['name' => 'Cotton aphid', 'type' => 'string'],
            ['name' => 'Cotton leaf hopper', 'type' => 'string'],
        ]);

        Category::where('name', 'Bacterial Resistance')->first()->attributes()->createMany([
            ['name' => 'Curtobacterium flaccumfaciens pv. flaccumfaciens (Tan spot)', 'type' => 'string'],
            ['name' => 'Pseudomonas savastanoi pv. phaseolicola (Halo blight)', 'type' => 'string'],
            ['name' => 'Tomato bacterial wilt', 'type' => 'string'],
            ['name' => 'Eggplant bacterial wilt', 'type' => 'string'],
        ]);

        Category::where('name', 'Fungal Resistance')->first()->attributes()->createMany([
            ['name' => 'Powdery mildew', 'type' => 'string'],
            ['name' => 'Tomato late blight', 'type' => 'string'],
            ['name' => 'Pepper anthrancnose', 'type' => 'string'],
            ['name' => 'Pepper phytophthora blight', 'type' => 'string'],
        ]);

        Category::where('name', 'Virus Resistance')->first()->attributes()->createMany([
            ['name' => 'Bhendi yellow vein mosaic virus', 'type' => 'string'],
            ['name' => 'Chilli veinal mottle virus', 'type' => 'string'],
            ['name' => 'Cucumber mosaic virus (5th)', 'type' => 'string'],
            ['name' => 'Cucumber mosaic virus (COTYL)', 'type' => 'string'],
            ['name' => 'Pepper mild mottle virus', 'type' => 'string'],
            ['name' => 'Potato virus Y', 'type' => 'string'],
            ['name' => 'Tobacco mosaic virus', 'type' => 'string'],
            ['name' => 'Tomato mosaic virus', 'type' => 'string'],
        ]);
    }
}
