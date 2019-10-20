@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="{{route('testimonials.index')}}">
    <button type="submit" class="close bg-danger p-2" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</form>
<form action="{{route('testimonials.store')}}" enctype="multipart/form-data" method="POST">
@csrf
@method('POST')
    <div class="text-center">
            <h2>Ajouter Testimonial</h2>
    </div>
    <br>
    <div class="form-group">
        <label for="photo">Image</label>
        <input type="file" name="photo" id=""/>
    
        
        </div>
        <div class="form-group">
        <label for="titre">Name</label>
        <input type="text" name="name" value="{{old('name')}}" id="" class="form-control" placeholder="Titre" >
        </div>
        <div class="form-group">
            <label for="titre">Title</label>
            <input type="text" name="title" value="{{old('title')}}" id="" class="form-control" placeholder="Titre" >
        </div>
        <div class="form-group">
        <label for="text">Texte</label>
        <textarea  name="quote" id="" value="{{old('quote')}}" rows="5" class="form-control" placeholder="Texte"></textarea>
            
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
        <button class="btn btn-primary" type="submit">Ajouter</button>
    </div>
</form>

@stop