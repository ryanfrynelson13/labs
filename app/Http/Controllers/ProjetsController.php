<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets=Projet::all();

        return view('templates.admin.projets',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.addProjet');
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
            'text'=>'required'
        ]);
        $projet= new Projet();
        $fileName= request()->file('photo')->getClientOriginalName();
        $path= request()->file('photo')->storeAs('projets',$fileName);
        $projet->photo = "storage/".$path;        
        $projet->titre = request()->input('titre');
        $projet->content = request()->input('text');
        $projet->save();

        return redirect('/admin/projets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view('templates.admin.editProjet',compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projet)
    {
        $request->validate([
            'photo'=>'required',
            'titre'=>'required',
            'text'=>'required'
        ]);       
        $fileName= request()->file('photo')->getClientOriginalName();
        $path= request()->file('photo')->storeAs('projets',$fileName);
        $projet->photo = "storage/".$path;        
        $projet->titre = request()->input('titre');
        $projet->content = request()->input('text');
        $projet->save();

        return redirect('/admin/projets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        $projet->delete();

        return redirect('/admin/projets');
    }
}
