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

class DisplayController extends Controller
{
    public function home(){
        $contents=Content::all();
        $medias=Media::all();
        $services=Service::paginate(9);
        $testimonials=Testimonial::all();
        $boss=Team::where('move',1)->get();
        $teams=Team::where('move',0)->get();
        $carousel=Media::where('placement','img_carousel')->get();        

        return view('welcome',compact('contents','medias','services','testimonials','boss','teams','carousel'));
        
    }

    public function services(){
        $contents=Content::all();
        $services=Service::paginate(9);
        $projets=Projet::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(2);

        return view('services',compact('contents','services','projets','medias','nav1','nav2'));
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
        $auteurs=Auteur::all();
        $tagliens=Taglien::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(3);
        
        return view('blog',compact('contents','categories','tags','articles','tagliens','medias','nav1','nav2'));
    }
    
    public function post($id){
        $contents=Content::all();
        $categories=Categorie::all();
        $tags=Tag::all();
        $article=Article::find($id);
        $commentaires=Commentaire::all();
        $auteurs=Auteur::all();
        $tagliens=Taglien::all();
        $medias=Media::all();
        $nav1=Content::find(1);
        $nav2=Content::find(3);

        return view('blog',compact('contents','categories','tags','articles','commentaires','auteurs','tagliens','medias','nav1','nav2'));
    }
}
