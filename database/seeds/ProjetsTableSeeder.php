<?php

use Illuminate\Database\Seeder;
use App\Projet;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projet::truncate();
        Projet::create([
            "photo"=>"img/card-1.jpg",
            "titre"=>"GET IN THE LAB",
            "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Projet::create([
            "photo"=>"img/card-2.jpg",
            "titre"=>"PROJECTS ONLINE",
            "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Projet::create([
            "photo"=>"img/card-3.jpg",
            "titre"=>"SMART MARKETING",
            "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
       
    }
}
