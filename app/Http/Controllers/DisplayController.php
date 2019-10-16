<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Content;
use App\Service;
use App\Testimonial;
use App\Team;
use App\Projet;
use App\Categorie;
use App\Tag;
use App\Media;
use App\Article;
use App\Commentaire;
use App\Auteur;
use App\Taglien;
use App\User;

class DisplayController extends Controller
{
    public function home(){
        $contents=Content::all();
        $medias=Media::all();
        $services=Service::inRandomOrder()->paginate(9);
        $trois=Service::inRandomOrder()->take(3)->get();         
        $testimonials=Testimonial::all();
        $boss=Team::where('move',1)->get();
        $team1=Team::all()->random(1);     
        while($team1[0]->move){
            $team1=Team::all()->random(1);   
        }
        $team2=Team::all()->random(1);     
        while($team2[0]->move || $team2[0]->id === $team1[0]->id){
            $team2=Team::all()->random(1);   
        }        
        $carousel=Media::where('placement','img_carousel')->get(); 
        

        return view('welcome',compact('contents','medias','services','trois','testimonials','boss','team1','team2','carousel'));
        
    }

    public function services(){
        $contents=Content::all();
        $services=Service::inRandomOrder()->paginate(9);        
        $six=Service::take(-6)->get();
        for ($i=0; $i < 6; $i++) { 
            if ($i<3) {
                $debut[$i]=$six[$i];
            } else{
                $fin[$i]=$six[$i];
            }
        }        
        $projets=Projet::inRandomOrder()->take(3)->get(); 
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(2);
       

        return view('services',compact('contents','services','projets','medias','nav1','nav2','debut','fin'));
    }

    public function contact(){
        $contents=Content::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(4);

        return view('contact',compact('contents','medias','nav1','nav2'));
    }

    public function blog(){
        $contents=Content::all();
        $categories=Categorie::all();
        $tags=Tag::all();
        $articles=Article::paginate(3);
        $commentaires=Commentaire::all();
        $auteurs=User::all();
        $tagliens=Taglien::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(3);
        
        return view('blog',compact('contents','categories','tags','articles','tagliens','medias','nav1','nav2'));
    }
    
    public function post(Article $article){
        $contents=Content::all();
        $categories=Categorie::all();
        $tags=Tag::all();        
        $commentaires=Commentaire::all();
        $auteurs=User::all();
        $tagliens=Taglien::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(3);

        return view('post',compact('contents','categories','tags','article','commentaires','auteurs','tagliens','medias','nav1','nav2'));
    }
}
