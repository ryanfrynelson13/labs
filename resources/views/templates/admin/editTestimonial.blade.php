@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="{{route('testimonials.index')}}">
    <button type="submit" class="close bg-danger p-2" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</form>
<form action="{{route('testimonials.update',$testimonial->id)}}" enctype="multipart/form-data" method="POST">
@csrf
@method('PATCH')
    <div class="text-center">
            <h2>Éditer Testimonial</h2>
    </div>
    <br>
    <div class="form-group">
        <label for="logo">Image</label>
        <input type="file"  name="photo" value="{{$testimonial->photo}}" id=""/>
    
           
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$testimonial->name}}" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$testimonial->title}}" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="text">Quote</label>
        <textarea  name="quote" id=""  rows="5" class="form-control">{{$testimonial->quote}}</textarea>
            
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>
    <div class="text-center">      
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>


@stop