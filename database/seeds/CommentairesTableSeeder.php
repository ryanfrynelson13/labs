<?php

use Illuminate\Database\Seeder;
use App\Commentaire;

class CommentairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commentaire::truncate();
        Commentaire::create([
            "photo"=>"img/avatar/01.jpg",
            "name"=>"Michael Smith",
            "commentaire"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "article"=>1
        ]);
        Commentaire::create([
            "photo"=>"img/avatar/02.jpg",
            "name"=>"Michael Smith",
            "commentaire"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "article"=>1
        ]);
        Commentaire::create([
            "photo"=>"img/avatar/01.jpg",
            "name"=>"Michael Smith",
            "commentaire"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "article"=>2
        ]);
        Commentaire::create([
            "photo"=>"img/avatar/02.jpg",
            "name"=>"Michael Smith",
            "commentaire"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "article"=>2
        ]);
        Commentaire::create([
            "photo"=>"img/avatar/01.jpg",
            "name"=>"Michael Smith",
            "commentaire"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "article"=>3
        ]);
        Commentaire::create([
            "photo"=>"img/avatar/02.jpg",
            "name"=>"Michael Smith",
            "commentaire"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "article"=>3
        ]);
    }
}
