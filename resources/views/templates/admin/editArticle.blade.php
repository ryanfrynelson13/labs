@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="{{route('articles.update',$article->id)}}" enctype="multipart/form-data" method="POST">
@csrf
@method('PATCH')
    <div class="text-center">
            <h2>Éditer Article</h2>
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
        <input type="file"  name="photo" value="{{$article->photo}}" id=""/>  
           
    </div>
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" value="{{$article->titre}}" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="Content">Texte</label>
        <textarea type="text" name="content" rows="30"  id="" class="form-control">{{$article->content}}</textarea>
    </div>
    <div class="form-group">
        <label for="titre">Catégorie</label>
        <input type="text" name="categorie" value="{{$categorie->categorie}}" id="" class="form-control">
    </div>
   
        
   
    <br>
    <div class="text-center">      
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>


@stop