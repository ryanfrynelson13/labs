<?php




namespace App\Http\Controllers;

use App\Content;
use App\Media;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function nav(){
          
        $nav1=Content::find(1);
        $nav2=Content::find(2);
        $nav3=Content::find(3);
        $nav4=Content::find(4);
        $logo=Media::find(2);                
        return view('templates.admin.nav',compact('nav1','nav2','nav3','nav4','logo'));
    }

    public function navUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('nav');
    }

    public function carousel(){
          
        $text=Content::find(5);        
        $logo=Media::find(3); 
        $images=Media::where('placement','img_carousel')->count();              
        return view('templates.admin.carousel',compact('text','logo','images'));
    }

    public function carouselUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('carousel');
    }

    public function about(){
        $titre1=Content::find(6);
        $bleu=Content::find(7);
        $titre2=Content::find(8);
        $text1=Content::find(9);
        $text2=Content::find(10);
        $bouton=Content::find(11);
        $video=Media::find(6);
        $image=Media::find(7);
        

        return view('templates.admin.about',compact('titre1','bleu','titre2','text1','text2','bouton','video','image'));
    }

    public function aboutUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('about');
    }
}
