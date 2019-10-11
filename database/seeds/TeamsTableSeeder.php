<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::truncate();
        Team::create([
            "photo"=>"img/team/2.jpg",
            "name"=>"Christinne Williams",
            "title"=>"Junior developer",
            "move"=>true
        ]);
        Team::create([
            "photo"=>"img/team/1.jpg",
            "name"=>"Christinne Williams",
            "title"=>"Project Manager",
            "move"=>false
        ]);
        Team::create([
            "photo"=>"img/team/3.jpg",
            "name"=>"Christinne Williams",
            "title"=>"Digital designer",
            "move"=>false
        ]);
    }
}
