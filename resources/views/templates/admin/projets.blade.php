@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content_header')

<div class="box">
    <div class="box-header">
      <h3 class="box-title">Projets Table</h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>Image</th>
          <th>Titre</th>
          <th>Texte</th>          
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach ($projets as $projet)
            <tr>
            <td><img class="img-fluid" src="/{{$projet->photo}}"/></td>
            <td>
              {{$projet->titre}} <br>              
            </td>   
            <td>{{$projet->content}}</td>
            <form action="{{route('projets.destroy',$projet->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <td><button class="btn btn-danger" type="submit"">Delete</button></td>
            </form>
            <form action="{{route('projets.edit',$projet->id)}}" method="GET">
            @csrf
            @method('GET')
              <td><button class="btn btn-primary" type="submit"">Edit</button></td>
            </form>
            
          </tr>
        @endforeach
        
        
      </tbody></table>
      
    </div>
    
    <!-- /.box-body -->
  </div>
  <div class="text-center">
    <form action="{{route('projets.create')}}" method="GET">
    @csrf
    @method('GET')
        <button type="submit" class="btn btn-lg btn-success">Ajouter Projet</button>
    </form>
  
  </div>
@stop
