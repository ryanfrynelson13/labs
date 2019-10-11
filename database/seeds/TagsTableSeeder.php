<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        Tag::create([
            "tag"=>"design",
            "count"=>3
        ]);
        Tag::create([
            "tag"=>"inspiration",
            "count"=>3
        ]);
        Tag::create([
            "tag"=>"branding",
            "count"=>0
        ]);
        Tag::create([
            "tag"=>"identity",
            "count"=>0
        ]);
        Tag::create([
            "tag"=>"video",
            "count"=>0
        ]);
        Tag::create([
            "tag"=>"web design",
            "count"=>0
        ]);
        Tag::create([
            "tag"=>"photography",
            "count"=>0
        ]);
    }
}
