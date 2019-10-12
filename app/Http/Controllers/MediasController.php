<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use Illuminate\Support\Facades\Storage;

class MediasController extends Controller
{
    public function navUpdate(Request $request, Media $media)
    {        
        $request->validate([
            'media' => 'required'
        ]); 
        $search='storage/';
        $replace='';
        $sub=$media->media_path;
        $res=str_replace($search,$replace,$sub); 
        
        if(Storage::disk('public')->has($res)){
            Storage::disk('public')->delete($res);
        }
        $fileName= request()->file('media')->getClientOriginalName();
        $path= request()->file('media')->storeAs('navs',$fileName);
        $media->media_path = "storage/".$path;
        $media->save();
        return redirect()->route('nav');
    }

    public function carouselUpdate(Request $request, Media $media)
    {        
        
        $request->validate([
            'media' => 'required'
        ]); 
        $search='storage/';
        $replace='';
        $sub=$media->media_path;
        $res=str_replace($search,$replace,$sub); 
        
        if(Storage::disk('public')->has($res)){
            Storage::disk('public')->delete($res);
        }
        $fileName= request()->file('media')->getClientOriginalName();
        $path= request()->file('media')->storeAs('carousel',$fileName);
        $media->media_path = "storage/".$path;
        $media->save();
        return redirect()->route('carousel');
    }

    public function carousel(){
        $images=Media::where('placement','img_carousel')->get();  
            
        return view('templates.admin.carouselImages',compact('images'));
    }

    public function carouselDelete(Media $media){
        $search='storage/';
        $replace='';
        $sub=$media->media_path;
        $res=str_replace($search,$replace,$sub);
        $delete= $media->delete();
        if($delete && Storage::disk('public')->has($res)){
            Storage::disk('public')->delete($res);
        }
        return redirect()->route('images');
    }

    public function carouselCreate(Request $request){
        $request->validate([
            'image' => 'required'
        ]); 
        $fileName= request()->file('image')->getClientOriginalName();
        $path= request()->file('image')->storeAs('carousel',$fileName);
        $carousel= new Media();
        $carousel->placement='img_carousel';
        $carousel->media_path=$path;
        $carousel->save();
        return redirect()->route('images');
        
    }
}
