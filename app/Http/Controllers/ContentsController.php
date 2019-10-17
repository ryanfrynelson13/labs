<?php




namespace App\Http\Controllers;

use App\Content;
use App\Media;
use App\Commentaire;

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

    public function testimonial(){
        $titre=Content::find(12);

        return view('templates.admin.testimonial',compact('titre'));
    }

    public function testimonialUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('testimonials');
    }

    public function team(){
        $titre1=Content::find(17);
        $bleu=Content::find(18);
        $titre2=Content::find(19);

        return view('templates.admin.team',compact('titre1','bleu','titre2'));
    }

    public function teamUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('team');
    }

    public function stand(){
        $titre=Content::find(20);
        $text=Content::find(21);
        $bouton=Content::find(22);

        return view('templates.admin.stand',compact('titre','text','bouton'));
    }

    public function standUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('stand');
    }

    public function contact(){
        $contents=Content::all();
       

        return view('templates.admin.contact',compact('contents'));
    }

    public function contactUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('contact');
    }

    public function service(){
        $contents=Content::all();
       

        return view('templates.admin.service',compact('contents'));
    }

    public function serviceUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('service');
    }

    public function news(){
        $titre=Content::find(39);
        $input=Content::find(40);
        $bouton=Content::find(41);
       

        return view('templates.admin.news',compact('titre','input','bouton'));
    }

    public function newsUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('news');
    }

    public function comment($id){
        $comment=new Commentaire();
        $comment->name= request('name');
        $comment->commentaire= request('message');
        $comment->email = request('email');
        $comment->article = $id;
        $comment->photo = 'http://lorempixel.com/200/200/people';
        $comment->save();

        return back();
    }
}
