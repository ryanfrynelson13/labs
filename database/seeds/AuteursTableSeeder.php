<?php

use Illuminate\Database\Seeder;
use App\Auteur;

class AuteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auteur::truncate();
        Auteur::create([
            "photo"=>"img/avatar/03.jpg",
            "description"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "user_id"=>2
        ]);
    }
}
