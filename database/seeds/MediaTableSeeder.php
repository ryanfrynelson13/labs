<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::truncate();
        Media::create([
            "placement"=>"preloader",
            "media_path"=>"img/logo.png"
        ]);
        Media::create([
            "placement"=>"nav logo",
            "media_path"=>"img/logo.png"
        ]);
        Media::create([
            "placement"=>"carousel logo",
            "media_path"=>"img/big-logo.png"
        ]);
        Media::create([
            "placement"=>"img_carousel",
            "media_path"=>"img/01.jpg"
        ]);
        Media::create([
            "placement"=>"img_carousel",
            "media_path"=>"img/02.jpg"
        ]);
        Media::create([
            "placement"=>"video_about",
            "media_path"=>"https://www.youtube.com/watch?v=JgHfx2v9zOU"
        ]);
        Media::create([
            "placement"=>"img_video",
            "media_path"=>"img/video.jpg"
        ]);
    }
}