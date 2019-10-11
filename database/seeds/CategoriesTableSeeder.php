<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::truncate();
        Categorie::create([
            "categorie"=>"Vestibulum maximus"
        ]);
        Categorie::create([
            "categorie"=>"Nisi eu lobortis pharetra"
        ]);
        Categorie::create([
            "categorie"=>"Orci quam accumsan"
        ]);
        Categorie::create([
            "categorie"=>"Auguen pharetra massa"
        ]);
        Categorie::create([
            "categorie"=>"Tellus ut nulla"
        ]);
        Categorie::create([
            "categorie"=>"Etiam egestas viverra"
        ]);
        Categorie::create([
            "categorie"=>"Loredana Papp "
        ]);
    }
}
