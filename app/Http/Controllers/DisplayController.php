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
        $team=Team::inRandomOrder()->where('move',false)->get();
        if($team->count()>=2){
            $team->take(2);           
        } else if($team->count()===1){
            $team->take(1);
        } 

        $carousel=Media::where('placement','img_carousel')->get(); 
        

        return view('welcome',compact('contents','medias','services','trois','testimonials','boss','team','carousel'));
        
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
        $categories=Categorie::inRandomOrder()->get();
        $catBar=$categories->take(6);
        $tags=Tag::inRandomOrder()->get();
        $tagBar=$tags->take(8);
        $articles=Article::where('publish',true)->paginate(3);
        $commentaires=Commentaire::all();
        $auteurs=User::all();
        $tagliens=Taglien::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(3);
        
        return view('blog',compact('contents','categories','tags','articles','tagliens','medias','nav1','nav2','catBar','tagBar'));
    }
    
    public function post(Article $article){
        $contents=Content::all();
        $categories=Categorie::all();
        $catBar=$categories->take(6);
        $tags=Tag::all();
        $tagBar=$tags->take(8);
        $auteurs=User::all();
        $tagliens=Taglien::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(3);

        return view('post',compact('contents','categories','tags','article','auteurs','tagliens','medias','nav1','nav2','catBar','tagBar'));
    }

    public function search(){
        $contents=Content::all();
        $categories=Categorie::inRandomOrder()->get();
        $catBar=$categories->take(6);
        $tags=Tag::inRandomOrder()->get();
        $tagBar=$tags->take(8);        
        $commentaires=Commentaire::all();
        $auteurs=User::all();
        $tagliens=Taglien::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(3);
        $articles=Article::where('publish',true)->paginate(3);
        $search=[];
        foreach($articles as $article){
            if(stripos($article,request('search'))){
                array_push($search,$article);
            }
        }
        
        
        return view('search',compact('contents','categories','tags','search','tagliens','medias','nav1','nav2','catBar','tagBar'));
    }
}
