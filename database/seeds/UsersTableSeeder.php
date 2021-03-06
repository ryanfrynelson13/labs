<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        User::create([
            "name"=>"admin",
            "email"=>"admin@admin.com",
            "password"=>bcrypt("admin"),
            "role"=>"admin"
        ]);
        User::create([
            "name"=>"Lore Williams",
            "email"=>"lorewilliams@editeur.com",
            "password"=>bcrypt("editeur"),
            "role"=>"editeur",
            "photo"=>"img/avatar/03.jpg",
            "description"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique."
        ]);
    }
}
