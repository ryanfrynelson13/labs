@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="{{route('teams.index')}}">
    <button type="submit" class="close bg-danger p-2" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</form>
<form action="{{route('teams.update',$team->id)}}" enctype="multipart/form-data" method="POST">
@csrf
@method('PATCH')
    <div class="text-center">
            <h2>Éditer Membre</h2>
    </div>
    <br>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file"  name="photo" value="{{$team->photo}}" id=""/>
    
           
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$team->name}}" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$team->title}}" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="Boss">Boss</label><br>
        <input {{$team->move?'checked':''}} type="checkbox" name="boss" id="">
            
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