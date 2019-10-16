<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\Tag;
use App\Taglien;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    
    {       
        $articles=Article::all();
        $categories=Categorie::all();
        $tags=Tag::all();
        $tagliens=Taglien::all();
        $users=User::all();
        // $commentaires=Commentaire::all();

        return view('templates.admin.articles',compact('articles','categories','tags','tagliens','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.addArticle');
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
            'photo'=>'required',
            'titre'=>'required',            
            'content'=>'required',           
            'categorie'=>'required',           
        ]);  
        $id=Auth::id();
        $fileName= request()->file('photo')->getClientOriginalName();
        $path= request()->file('photo')->storeAs('articles',$fileName);
        $article=new Article();
        $article->photo = "storage/".$path;        
        $article->titre = request()->input('titre');
        $article->content = request()->input('content');
        $article->user_id= $id;
        if(Categorie::where('categorie',request()->input('categorie'))->count()===1){
            $categorie=Categorie::where('categorie',request()->input('categorie'))->get();
            $article->categorie= $categorie[0]->id;
            $article->save();
        } else{
           
            $categorie= new Categorie();
            $categorie->categorie = request()->input('categorie');
            $categorie->save();
            $article->categorie = $categorie->id;
            $article->save();
        }
       
        
        

        return redirect('/admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $categorie=Categorie::find($article->categorie);
        $tags=Tag::all();
        $tagliens=Taglien::all();
        $users=User::all();

        return view('templates.admin.article',compact('article','categorie','tags','tagliens','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categorie=Categorie::find($article->categorie);

        return view('templates.admin.editArticle',compact('article','categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'photo'=>'required',
            'titre'=>'required',            
            'content'=>'required',           
            'categorie'=>'required',           
        ]);  
        $fileName= request()->file('photo')->getClientOriginalName();
        $path= request()->file('photo')->storeAs('articles',$fileName);
        $article->photo = "storage/".$path;        
        $article->titre = request()->input('titre');
        $article->content = request()->input('content');       
        if(Categorie::where('categorie',request()->input('categorie'))->count()===1){
            $categorie=Categorie::where('categorie',request()->input('categorie'))->get();
            $article->categorie= $categorie[0]->id;
            $article->save();
        } else{
           
            $categorie= new Categorie();
            $categorie->categorie = request()->input('categorie');
            $categorie->save();
            $article->categorie = $categorie->id;
            $article->save();
        }
       
        
        

        return redirect('/admin/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if(Article::where('categorie',$article->categorie)->count()===1){
            $id=$article->categorie;
            $article->delete();
            Categorie::find($id)->delete();
        }else{
            $article->delete();
        }
       

        return redirect('/admin/articles');
    }
}
