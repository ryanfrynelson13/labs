@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="box">
        <div class="box-header">
          <h3 class="box-title">Boss</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th>Photo</th>
              <th>Title</th>
              <th>Name</th> 
              <th>Delete</th>
              <th>Update</th>
            </tr>                       
                
                @foreach ($leader as $item)
                <tr>   
               
                <td><img class="img-fluid" src="/{{$item->photo}}" alt=""></td>
                
                <td>
                  {{$item->name}} <br>              
                </td>   
                <td>{{$item->title}}</td>
               
                <form action="{{route('teams.destroy',$item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                  <td><button class="btn btn-danger" type="submit"">Delete</button></td>
                </form>
                <form action="{{route('teams.edit',$item->id)}}" method="GET">
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
   
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Membre</h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>Photo</th>
          <th>Title</th>
          <th>Name</th> 
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach ($members as $member)
            <tr>
            <td><img class="img-fluid" src="/{{$member->photo}}" alt=""></td>           
            <td>
              {{$member->name}} <br>              
            </td>   
            <td>{{$member->title}}</td>
           
            <form action="{{route('teams.destroy',$member->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <td><button class="btn btn-danger" type="submit"">Delete</button></td>
            </form>
            <form action="{{route('teams.edit',$member->id)}}" method="GET">
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
    <form action="{{route('teams.create')}}" method="GET">
    @csrf
    @method('GET')
        <button type="submit" class="btn btn-lg btn-success">Ajouter Membre</button>
    </form>
  
  </div>
@stop
