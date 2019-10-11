<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        dd($boss);
        
    }
    public function services(){
        
    }
    public function contact(){
        
    }
    public function blog(){
        
    }
    public function post(){
        
    }
}
