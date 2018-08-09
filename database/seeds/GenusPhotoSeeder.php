<?php

use App\Genus;
use Illuminate\Database\Seeder;

class GenusPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genus::where('name', 'Capsicum')->update(['photo' => 'img/char/capsicum.jpg']);
        Genus::where('name', 'Cucumis')->update(['photo' => 'img/char/cucumis.jpg']);
        Genus::where('name', 'Vigna')->update(['photo' => 'img/char/vigna.jpg']);
        Genus::where('name', 'Solanum')->update(['photo' => 'img/char/solanum.jpg']);
    }
}
