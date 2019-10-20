@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
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
      <h3 class="box-title">Carousel Contenu</h3>      
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>Contenu</th>          
                    <th>Update</th>
                </tr>  
                <tr>
                    <form action="carousel/{{$text->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$text->placement}}</td>
                        <td><textarea name="content" id="">{{$text->content}}</textarea></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="media/carousel/{{$logo->id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$logo->placement}}</td>
                        <td><input type="file" value="{{$logo->media_path}}" name="media" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr> 
                <tr>
                    <form action="carousel/images" method="GET">
                    @csrf
                    @method('GET')
                        <td>Images</td>
                        <td>Nombre: {{$images}}</td>           
                        <td><button class="btn btn-success" type="submit">View</button></td>
                    </form> 
                </tr>
                
            </tbody>
        </table>
    </div>
    
    <!-- /.box-body -->

@stop