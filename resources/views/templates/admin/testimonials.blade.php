@extends('adminlte::page')


@section('title', 'AdminLTE')
@section('content_header')

<div class="box">
    <div class="box-header">
      <h3 class="box-title">Testimonials Table</h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>Photo</th>
          <th>Quote</th>
          <th>Name</th>          
          <th>Title</th>          
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach ($testimonials as $testimonial)
            <tr>
            <td><img class="img-fluid" src="/{{$testimonial->photo}}" alt=""></td>
            <td>{{$testimonial->quote}}</td>
            <td>
              {{$testimonial->name}} <br>              
            </td>   
            <td>{{$testimonial->title}}</td>
           
            <form action="{{route('testimonials.destroy',$testimonial->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <td><button class="btn btn-danger" type="submit"">Delete</button></td>
            </form>
            <form action="{{route('testimonials.edit',$testimonial->id)}}" method="GET">
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
    <form action="{{route('testimonials.create')}}" method="GET">
    @csrf
    @method('GET')
        <button type="submit" class="btn btn-lg btn-success">Ajouter Testimonial</button>
    </form>
  
  </div>
@stop
