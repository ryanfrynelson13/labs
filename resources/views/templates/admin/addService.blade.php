@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="{{route('services.store')}}" method="POST">
@csrf
@method('POST')
    <div class="text-center">
            <h2>Ajouter Service</h2>
    </div>
    <br>
    <div class="form-group">
        <label for="logo">Logo</label>
        <select class="" name="logo" value="{{old('logo')}}" id="">
    
        </select>   
        </div>
        <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" value="{{old('titre')}}" id="" class="form-control" placeholder="Titre" >
        </div>
        <div class="form-group">
        <label for="text">Texte</label>
        <textarea  name="text" id="" value="{{old('text')}}" rows="5" class="form-control" placeholder="Texte"></textarea>
            
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