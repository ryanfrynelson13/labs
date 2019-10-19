<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Taglien;
use App\Tag;
use App\Article;
use App\Categorie;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();       

        return view('templates.admin.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User();
        if(request('role')==="editeur"){
            $request->validate([
                'name'=>'required',
                'photo'=>'required',
                'description'=>'required',
                'email'=>'required|unique:users,email',
                'password'=>'required'
                
            ]);
            $fileName= request()->file('photo')->getClientOriginalName();
            $path= request()->file('photo')->storeAs('user',$fileName);
            $user->photo = "storage/".$path;
            $user->name = request('name');        
            $user->email = request('email');        
            $user->description = request('description');
            $user->role="editeur";
            $user->password= bcrypt(request('password'));
            $user->save();
            
            return redirect('/admin/users');
            
        }else{
            $request->validate([
                'name'=>'required',                
                'email'=>'required|unique:users,email',
                'password'=>'required'                
            ]);
            if(request('photo')){
                $fileName= request()->file('photo')->getClientOriginalName();
                $path= request()->file('photo')->storeAs('user',$fileName);
                $user->photo = "storage/".$path; 
            }else{
                $user->photo=null;
            }
            $user->name = request('name');        
            $user->email = request('email');        
            $user->description = request('description'); 
            $user->role=request('role');
            $user->password= bcrypt(request('password')); 
            $user->save();
            
            return redirect('/admin/users');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('templates.admin.editUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if(request('role')==="editeur"){
            $request->validate([
                'name'=>'required',
                'photo'=>'required',
                'description'=>'required',
                'email'=>'required|unique:users,email',
                
            ]);
            $fileName= request()->file('photo')->getClientOriginalName();
            $path= request()->file('photo')->storeAs('user',$fileName);
            $user->photo = "storage/".$path;
            $user->name = request('name');        
            $user->email = request('email');        
            $user->description = request('description');
            $user->role="editeur";
            $user->save();
            
            return redirect('/admin/users');
            
        }else{
            $request->validate([
                'name'=>'required',                
                'email'=>'required|unique:users,email',                
            ]);
            if(request('photo')){
                $fileName= request()->file('photo')->getClientOriginalName();
                $path= request()->file('photo')->storeAs('user',$fileName);
                $user->photo = "storage/".$path; 
            }else{
                $user->photo=null;
            }
            $user->name = request('name');        
            $user->email = request('email');        
            $user->description = request('description'); 
            $user->role=request('role');
            if(request('password')){
                $user->password= bcrypt(request('password'));          
            }
            $user->save();
            
            return redirect('/admin/users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
            
        if($user->id === Auth::id()){
            return back();
            
        } else{           
            $articles=Article::where('user_id',$user->id)->get();
            foreach ($articles as $article) {
                
                $liens=Taglien::where('article_id',$article->id)->get();
                foreach($liens as $lien){
                    $tag=Tag::find($lien->tag_id);
                    if ($tag->count===1) {
                        $tag->delete();
                    } else {
                        $tag->count-=1;
                        $tag->save();
                    }
                    
                }
                if(Article::where('categorie',$article->categorie)->count()===Article::where('categorie',$article->categorie)->where('user_id',$user->id)->count()){
                    $user->delete();
                    Categorie::find($article->categorie)->delete();
                }else{
                    $user->delete();
                }
            }
            if($user){
                $user->delete();
            }
            return back();
        }
    }

    public function profile(){
        $user=Auth::user();

        return view('templates.editeur.profile',compact('user'));
    }

    public function editProfile(){
        $user=Auth::user();

        return view('templates.editeur.editProfile',compact('user'));
    }

    public function updateProfile(Request $request){
        $user=Auth::user();
        $request->validate([
            'name'=>'required',
            'photo'=>'required',
            'description'=>'required',
            'email'=>'required|unique:users,email',
            
        ]);
        $fileName= request()->file('photo')->getClientOriginalName();
        $path= request()->file('photo')->storeAs('user',$fileName);
        $user->photo = "storage/".$path;
        $user->name = request('name');        
        $user->email = request('email');        
        $user->description = request('description');        
        if(request('password')){
            $user->password= bcrypt(request('password'));          
        }        
        $user->save();
        
       

        return redirect('/editeur/users');
    }
}
