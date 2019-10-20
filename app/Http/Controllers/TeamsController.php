<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leader=Team::where('move',true)->get();
        // dd($boss);
        $members=Team::where('move',false)->get();
        return view('templates.admin.teams',compact('leader','members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.addTeam');
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
            'title'=>'required|max:40',            
            'name'=>'required|max:40',         
        ]);  
        
        
        $team=new Team();     
        $fileName= request()->file('photo')->getClientOriginalName();
        $path= request()->file('photo')->storeAs('team',$fileName);
        $team->photo = "storage/".$path;        
        $team->title = request()->input('title');
        $team->name = request()->input('name');
        if(request()->input('boss')){            
            $teams=Team::all();
            foreach ($teams as $item){
                $item->move=false;
                $item->save();
            }
            $team->move=true;
        } else{
            $team->move = false;
        }
        $team->save();

        return redirect('/admin/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('templates.admin.editTeam',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([            
            'title'=>'required|max:40',            
            'name'=>'required|max:40',           
        ]); 
        if(request('photo')){
            $fileName= request()->file('photo')->getClientOriginalName();
            $path= request()->file('photo')->storeAs('team',$fileName);
            $team->photo = "storage/".$path;         
        } 
               
        $team->title = request()->input('title');
        $team->name = request()->input('name');
        if(request()->input('boss')){            
            $teams=Team::all();
            foreach ($teams as $item){
                $item->move=false;
                $item->save();
            }
            $team->move=true;
        } else{
            $team->move = false;
        }
        $team->save();

        return redirect('/admin/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
       $team->delete();

       return redirect('/admin/teams');
    }
}
