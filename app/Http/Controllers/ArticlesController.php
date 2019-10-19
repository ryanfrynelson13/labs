<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\Tag;
use App\Taglien;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Post;

class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('admin')->only('index');
       
    }
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
            if(!Auth::user()->isAdmin()){
                $user=User::find(Auth::id());
                $admins=User::where('role','admin')->get();
                foreach ($admins as $admin) {
    
                    Mail::to($admin->email)->send(new Post($article,$user));
                    
                }
            }  
           
        } else{
           
            $categorie= new Categorie();
            $categorie->categorie = request()->input('categorie');
            $categorie->save();
            $article->categorie = $categorie->id;
            $article->save();
            if(!Auth::user()->isAdmin()){
                $user=User::find(Auth::id());
                $admins=User::where('role','admin')->get();
                foreach ($admins as $admin) {
    
                    Mail::to($admin->email)->send(new Post($article,$user));
                    
                }
            }  
           
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
            $article->publish= false;
            $article->save();
            if(!Auth::user()->isAdmin()){
                $user=User::find(Auth::id());
                $admins=User::where('role','admin')->get();
                foreach ($admins as $admin) {
    
                    Mail::to($admin->email)->send(new Post($article,$user));
                    
                }
            }  
        } else{
           
            $categorie= new Categorie();
            $categorie->categorie = request()->input('categorie');
            $categorie->save();
            $article->categorie = $categorie->id;
            $article->publish= false;
            $article->save();
            if(!Auth::user()->isAdmin()){
                $user=User::find(Auth::id());
                $admins=User::where('role','admin')->get();
                foreach ($admins as $admin) {
    
                    Mail::to($admin->email)->send(new Post($article,$user));
                    
                }
            }  
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
        if(Taglien::where('article_id',$article->id)->count()>0){
            $liens= Taglien::where('article_id',$article->id)->get();
            foreach($liens as $lien){
                $tag=Tag::Find($lien->tag_id);
                if($tag->count===1){
                    $tag->delete();
                }else{                  
                    $tag->count -=1;
                    $tag->save();
                }
                $lien->delete();
            }
        }
        if(Article::where('categorie',$article->categorie)->count()===1){
            $id=$article->categorie;
            $article->delete();
            Categorie::find($id)->delete();
        }else{
            $article->delete();
        }
           
       
        

        return redirect('/admin/articles');
    }

    public function editeur(){
        $articles=Article::where('user_id',Auth::id())->get();      
        $categories=Categorie::all();
        $tags=Tag::all();
        $tagliens=Taglien::all();

        return view('templates.editeur.articles',compact('articles','categories','tags','tagliens'));
    }
}
