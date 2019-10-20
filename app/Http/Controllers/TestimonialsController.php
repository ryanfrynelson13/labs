<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::all();
        return view('templates.admin.testimonials',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.addTestimonial');
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
            'quote'=>'required|max:200',            
            'title'=>'required|max:40',
            'name'=>'required|max:40'
        ]);  
        $testimonial=new Testimonial();     
        $fileName= request()->file('photo')->getClientOriginalName();
        $path= request()->file('photo')->storeAs('testimonials',$fileName);
        $testimonial->photo = "storage/".$path;        
        $testimonial->title = request()->input('title');
        $testimonial->name = request()->input('name');
        $testimonial->quote = request()->input('quote');
        $testimonial->save();

        return redirect('/admin/testimonials');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
      return view('templates.admin.editTestimonial',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'quote'=>'required|max:200',            
            'title'=>'required|max:40',
            'name'=>'required|max:40'
        ]); 
        if(request('photo')){
            $fileName= request()->file('photo')->getClientOriginalName();
            $path= request()->file('photo')->storeAs('testimonials',$fileName);
            $testimonial->photo = "storage/".$path;
        }
        $testimonial->title = request()->input('title');
        $testimonial->name = request()->input('name');
        $testimonial->quote = request()->input('quote');
        $testimonial->save();

        return redirect('/admin/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect('/admin/testimonials');
    }
}
