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
}
