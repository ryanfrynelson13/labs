@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="{{route('teams.store')}}" enctype="multipart/form-data" method="POST">
@csrf
@method('POST')
    <div class="text-center">
            <h2>Ajouter Membre</h2>
    </div>
    <br>
        <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" id=""/>
    
        
        </div>
        <div class="form-group">
        <label for="titre">Name</label>
        <input type="text" name="name" value="{{old('name')}}" id="" class="form-control" placeholder="Titre" >
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{old('title')}}" id="" class="form-control" placeholder="Titre" >
        </div>
        <div class="form-group">
            <label for="boss">Boss</label><br>
            <input type="checkbox" name="boss"  id="">
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