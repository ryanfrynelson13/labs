@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content_header')

<div class="box">
    <div class="box-header">
      <h3 class="box-title">Services Table</h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>Logo</th>
          <th>Titre</th>
          <th>Texte</th>          
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach ($services as $service)
            <tr>
            <td><i class="{{$service->logo}}"></i></td>
            <td>
              {{$service->titre}} <br>              
            </td>   
            <td>{{$service->text}}</td>
            <td><button class="btn btn-danger" type="submit"">Delete</button></td>
            <td><button class="btn btn-primary" type="submit"">Edit</button></td>
          </tr>
        @endforeach
        
        
      </tbody></table>
      
    </div>
    
    <!-- /.box-body -->
  </div>
  <div class="text-center">
  <a href="/admins/album/new" class="btn btn-lg btn-success">ADD ALBUM</a>
  </div>
@stop
