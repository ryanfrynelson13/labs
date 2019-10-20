@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="{{route('articles.index')}}">
    <button type="submit" class="close bg-danger p-2" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</form>
<form action="{{route('articles.store')}}" enctype="multipart/form-data" method="POST">
@csrf
@method('POST')
    <div class="text-center">
            <h2>Créer Article</h2>
    </div>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="photo">Image</label>
        <input type="file"  name="photo" value="{{old('photo')}}" id=""/>  
           
    </div>
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" value="{{old('titre')}}" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="Content">Texte</label>
        <textarea type="text" name="content" rows="30"  id="" class="form-control">{{old('content')}}</textarea>
    </div>
    <div class="form-group">
        <label for="titre">Catégorie</label>
        <input type="text" name="categorie" value="{{old('categorie')}}" id="" class="form-control">
    </div>
   
        
   
    <br>
    <div class="text-center">      
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>


@stop