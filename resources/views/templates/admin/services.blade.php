@extends('adminlte::page')

@section('css')
   <link rel="stylesheet" href="/css/flaticon.css">
@endsection

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
            <form action="{{route('services.destroy',$service->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <td><button class="btn btn-danger" type="submit"">Delete</button></td>
            </form>
            <form action="{{route('services.edit',$service->id)}}" method="GET">
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
    <form action="{{route('services.create')}}" method="GET">
    @csrf
    @method('GET')
        <button type="submit" class="btn btn-lg btn-success">Ajouter Service</button>
    </form>
  
  </div>
@stop
