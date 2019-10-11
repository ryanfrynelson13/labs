<?php

use Illuminate\Database\Seeder;
use App\Taglien;

class TagLiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taglien::truncate();
        Taglien::create([
            "tag_id"=>1,
            "article_id"=>1
        ]);
        Taglien::create([
            "tag_id"=>2,
            "article_id"=>1
        ]);
        Taglien::create([
            "tag_id"=>1,
            "article_id"=>2
        ]);
        Taglien::create([
            "tag_id"=>2,
            "article_id"=>2
        ]);
        Taglien::create([
            "tag_id"=>1,
            "article_id"=>3
        ]);
        Taglien::create([
            "tag_id"=>2,
            "article_id"=>3
        ]);
    }
}
