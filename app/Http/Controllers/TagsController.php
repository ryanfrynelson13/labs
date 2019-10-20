<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use App\Taglien;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $article=Article::find(request('article'));        
        $tags=Tag::all();
        $tagliens=Taglien::where('article_id',$article->id)->get();       
        return view('templates.admin.tags',compact('article','tags','tagliens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tag'=>'required|max:15'
        ]);
        if (Tag::where('tag',request('tag'))->count()===1) {
            $tag=Tag::where('tag',request('tag'))->get();            
            if(Taglien::where('article_id',request('article'))->where('tag_id',$tag[0]->id)->count()===1){                   
               
                 return back();
            }else{                   
                $lien =new Taglien();
                $lien->tag_id= $tag[0]->id;
                $lien->article_id= request('article');
                $lien->save();
                $tag[0]->count +=1;
                $tag[0]->save();
                return back();
            }
            
            
         } else{
             $tag=new Tag();
             $tag->tag= request('tag');
             $tag->count = 1;
             $tag->save();
             $lien=new Taglien();
             $lien->tag_id= $tag->id;
             $lien->article_id = request('article');
             $lien->save();             
             return back();
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'tag'=>'required|max:15'
        ]);
        if($tag->tag === request()->input('tag') ){
            return back();
        } else{
            if (Tag::where('tag',request('tag'))->count()===1) {
               $tag2=Tag::where('tag',request('tag'))->get();
               $lien=Taglien::find(request('lien'));
               if(Taglien::where('article_id',$lien->article_id)->where('tag_id',$tag2[0]->id)->count()===1){                   
                    $lien->delete();
                    if($tag->count===1){
                        $tag->delete();
                    }else{                  
                        $tag->count -=1;
                        $tag->save();
                    }
                    return back();
               }else{                   
                    $lien->tag_id = $tag2[0]->id;
                    $lien->save();
                    $tag2[0]->count +=1;
                    $tag2[0]->save();               
                    if($tag->count===1){
                        $tag->delete();
                    }else{                  
                        $tag->count -=1;
                        $tag->save();
                    }
                    return back();
               }
               
               
            } else{
                $tag2=new Tag();
                $tag2->tag= request('tag');
                $tag2->count = 1;
                $tag2->save();
                $lien=Taglien::find(request('lien'));
                $lien->tag_id= $tag2->id;
                $lien->save();
                if($tag->count===1){
                    $tag->delete();
                }else{                  
                    $tag->count -=1;
                    $tag->save();
                }
                return back();
            }
            
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        
        if($tag->count===1){
            $tag->delete();
        }else{                  
            $tag->count -=1;
            $tag->save();
        }
        if(Taglien::where('tag_id',$tag->id)->count()>0){
            $lien=Taglien::find(request('lien'))->delete();
        }
        

        return back();
    }
}
