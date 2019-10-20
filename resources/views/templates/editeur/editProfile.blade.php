@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<form action="/editeur/profile">
    <button type="submit" class="close bg-danger p-2" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</form>
<form action="update" enctype="multipart/form-data" method="POST">
@csrf
@method('PATCH')
    <div class="text-center">
            <h2>Éditer Profile</h2>
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
        <label for="photo">Photo</label>
        <input type="file"  name="photo" value="{{$user->photo}}" id=""/>
    
           
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$user->name}}" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Email</label>
        <input type="text" name="email" value="{{$user->email}}" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Description</label>
        <textarea type="text" rows="5" name="description" id="" class="form-control">{{$user->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="title">New Password</label>
        <input type="password" name="password"  id="" class="form-control">
    </div>
   
    <br>
    <div class="text-center">      
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>


@stop