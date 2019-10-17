@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content_header')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="box">
    <div class="box-header">
      <h3 class="box-title">Users Table</h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>Photo</th>
          <th>Name</th>
          <th>Email</th>          
          <th>Role</th>          
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach ($users as $user)
            <tr>
            <td><img src="/{{$user->photo}}" alt=""></td>
            <td>
              {{$user->name}}              
            </td>   
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <form action="{{route('users.destroy',$user->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <td><button class="btn btn-danger" type="submit"">Delete</button></td>
            </form>
            <form action="{{route('users.edit',$user->id)}}" method="GET">
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
        <button type="submit" class="btn btn-lg btn-success">Ajouter User</button>
    </form>
  
  </div>
@stop
