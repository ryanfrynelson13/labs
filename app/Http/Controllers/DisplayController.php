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
        $boss=Team::where('move',1);
        $teams=Team::where('move',0);  

        return view('welcome',compact('contents','medias','services','testimonials','boss','teams'));
        
    }

    public function services(){
        $contents=Content::all();
        $services=Service::paginate(9);
        $projets=Projet::all();
        
        return view('services',compact('contents','services','projets'));
    }

    public function contact(){
        $contents=Content::all();
        return view('contact',compact('contents'));
    }

    public function blog(){
        $contents=Content::all();
        $categories=Categorie::all();
        $tags=Tag::all();
        $articles=Article::paginate(3);
        $commentaires=Commentaire::all();
        $auteurs=Auteur::all();
        $tagliens=Taglien::all();
        
        return view('blog',compact('contents','categories','tags','articles','tagliens'));
    }
    
    public function post($id){
        $contents=Content::all();
        $categories=Categorie::all();
        $tags=Tag::all();
        $article=Article::find($id);
        $commentaires=Commentaire::all();
        $auteurs=Auteur::all();
        $tagliens=Taglien::all();

        return view('blog',compact('contents','categories','tags','articles','commentaires','auteurs','tagliens'));
    }
}
