@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="{{route('services.update',$service->id)}}" method="POST">
@csrf
@method('PATCH')
    <div class="text-center">
            <h2>Éditer Service</h2>
    </div>
    <br>
    <div class="form-group">
        <label for="logo">Logo</label>
        <select class="" name="logo" value="{{$service->logo}}" id="">
    
        </select>   
        </div>
        <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" value="{{$service->titre}}" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="text">Texte</label>
        <textarea  name="text" id=""  rows="5" class="form-control">{{$service->text}}</textarea>
            
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