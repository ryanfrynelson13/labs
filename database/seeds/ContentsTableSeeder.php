<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Content::truncate();
        Content::create([
            "placement"=>"nav 1",
            "content"=>"Home"  
        ]);
        Content::create([
            "placement"=>"nav 2",
            "content"=>"Services"  
        ]);
        Content::create([
            "placement"=>"nav 3",
            "content"=>"Blog"  
        ]);
        Content::create([
            "placement"=>"nav 4",
            "content"=>"Contact"  
        ]);
        Content::create([
            "placement"=>"carousel text",
            "content"=>"Get your freebie template now!"  
        ]);
        Content::create([
            "placement"=>"about titre part1",
            "content"=>"Get in"  
        ]);
        Content::create([
            "placement"=>"about titre bleu",
            "content"=>"the Lab"  
        ]);
        Content::create([
            "placement"=>"about titre part2",
            "content"=>"and discover the world"  
        ]);
        Content::create([
            "placement"=>"about text 1",
            "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu."  
        ]);
        Content::create([
            "placement"=>"about text 2",
            "content"=>"Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus."  
        ]);
        Content::create([
            "placement"=>"about bouton contenu",
            "content"=>"Browse"  
        ]);
        Content::create([
            "placement"=>"about bouton lien",
            "content"=>"/"  
        ]);
        Content::create([
            "placement"=>"testimonials titre",
            "content"=>"What our clients say"  
        ]);
        Content::create([
            "placement"=>"services titre part1",
            "content"=>"Get in"  
        ]);
        Content::create([
            "placement"=>"services titre bleu",
            "content"=>"the Lab"  
        ]);
        Content::create([
            "placement"=>"services titre part2",
            "content"=>"and see the services"  
        ]);
        Content::create([
            "placement"=>"services bouton content",
            "content"=>"Browse"  
        ]);
        Content::create([
            "placement"=>"team titre part1",
            "content"=>"Get in"  
        ]);
        Content::create([
            "placement"=>"team titre bleu",
            "content"=>"the Lab"  
        ]);
        Content::create([
            "placement"=>"team titre part2",
            "content"=>"and meet the team"  
        ]);
        Content::create([
            "placement"=>"promotion titre",
            "content"=>"Are you ready to stand out?"  
        ]);
        Content::create([
            "placement"=>"promotion text",
            "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est."  
        ]);
        Content::create([
            "placement"=>"promotion bouton",
            "content"=>"Browse"  
        ]);
        Content::create([
            "placement"=>"input name",
            "content"=>"Your name"  
        ]);
        Content::create([
            "placement"=>"input email",
            "content"=>"Your email"  
        ]);
        Content::create([
            "placement"=>"input objet",
            "content"=>"Subject"  
        ]);
        Content::create([
            "placement"=>"input message",
            "content"=>"Message"  
        ]);
        Content::create([
            "placement"=>"contact bouton",
            "content"=>"Send"  
        ]);
        Content::create([
            "placement"=>"contact titre",
            "content"=>"Contact us"  
        ]);
        Content::create([
            "placement"=>"contact text",
            "content"=>"Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum."  
        ]);
        Content::create([
            "placement"=>"contact sous-titre",
            "content"=>"Main Office"  
        ]); 
        Content::create([
            "placement"=>"contact adresse",
            "content"=>"C/ Libertad, 34"  
        ]); 
        Content::create([
            "placement"=>"contact adresse",
            "content"=>"05200 Arévalo"  
        ]); 
        Content::create([
            "placement"=>"contact téléphone",
            "content"=>"0034 37483 2445 322"  
        ]); 
        Content::create([
            "placement"=>"contact email",
            "content"=>"hello@company.com"  
        ]); 
        Content::create([
            "placement"=>"lab titre part1",
            "content"=>"Get in"  
        ]);
        Content::create([
            "placement"=>"lab titre bleu",
            "content"=>"the Lab"  
        ]);
        Content::create([
            "placement"=>"lab titre part2",
            "content"=>"and discover the world"  
        ]);
        Content::create([
            "placement"=>"lab bouton",
            "content"=>"Browse"  
        ]);
        Content::create([
            "placement"=>"newsletter titre",
            "content"=>"Newsletter"  
        ]);
        Content::create([
            "placement"=>"newsletter input",
            "content"=>"Your e-mail here"  
        ]);
        Content::create([
            "placement"=>"newsletter bouton",
            "content"=>"Newsletter"  
        ]);
    }
}
