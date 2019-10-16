<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(ProjetsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(CommentairesTableSeeder::class);        
        $this->call(TagLiensTableSeeder::class);

    }
}
