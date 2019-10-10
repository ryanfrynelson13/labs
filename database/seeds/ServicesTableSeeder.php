<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();
        Service::create([
            "logo"=>"flaticon-023-flask",
            "titre"=>"Get in the lab",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Service::create([
            "logo"=>"flaticon-011-compass",
            "titre"=>"Projects online",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Service::create([
            "logo"=>"flaticon-037-idea",
            "titre"=>"SMART MARKETING",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Service::create([
            "logo"=>"flaticon-039-vector",
            "titre"=>"Social Media",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Service::create([
            "logo"=>"flaticon-036-brainstorming",
            "titre"=>"Brainstorming",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Service::create([
            "logo"=>"flaticon-026-search",
            "titre"=>"Documented",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Service::create([
            "logo"=>"flaticon-018-laptop-1",
            "titre"=>"Responsive",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Service::create([
            "logo"=>"flaticon-043-sketch",
            "titre"=>"Retina ready",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        Service::create([
            "logo"=>"flaticon-012-cube",
            "titre"=>"Ultra modern",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
    }
}
