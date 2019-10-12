@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Nav Contenu</h3>      
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
                    <form action="nav/{{$nav1->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$nav1->placement}}</td>
                        <td><input type="text" value="{{$nav1->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="nav/{{$nav2->id}}" method="Post">
                    @csrf
                    @method('PATCH')
                        <td>{{$nav2->placement}}</td>
                        <td><input type="text" value="{{$nav2->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="nav/{{$nav3->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$nav3->placement}}</td>
                        <td><input type="text" value="{{$nav3->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="nav/{{$nav4->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$nav4->placement}}</td>
                        <td><input type="text" value="{{$nav4->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="media/nav/{{$logo->id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$logo->placement}}</td>
                        <td><input type="file" value="{{$logo->media_path}}" name="media" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
            </tbody>
        </table>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      
    </div>
    
    <!-- /.box-body -->

@stop