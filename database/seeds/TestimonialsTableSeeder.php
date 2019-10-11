<?php

use Illuminate\Database\Seeder;
use App\Testimonial;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::truncate();
        Testimonial::create([
            "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "photo"=>"img/avatar/01.jpg",
            "name"=>"Michael Smith",
            "title"=>"CEO Company"
        ]);
        Testimonial::create([
            "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "photo"=>"img/avatar/02.jpg",
            "name"=>"Michael Smith",
            "title"=>"CEO Company"
        ]);
        Testimonial::create([
            "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "photo"=>"img/avatar/01.jpg",
            "name"=>"Michael Smith",
            "title"=>"CEO Company"
        ]);
        Testimonial::create([
            "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "photo"=>"img/avatar/02.jpg",
            "name"=>"Michael Smith",
            "title"=>"CEO Company"
        ]);
        Testimonial::create([
            "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "photo"=>"img/avatar/01.jpg",
            "name"=>"Michael Smith",
            "title"=>"CEO Company"
        ]);
        Testimonial::create([
            "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "photo"=>"img/avatar/02.jpg",
            "name"=>"Michael Smith",
            "title"=>"CEO Company"
        ]);
    }
}
