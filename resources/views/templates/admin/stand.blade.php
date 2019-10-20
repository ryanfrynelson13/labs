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
      <h3 class="box-title">Stand Out Contenu</h3>      
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
                    <form action="stand/{{$titre->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$titre->placement}}</td>
                        <td><input type="text" value="{{$titre->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="stand/{{$text->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$text->placement}}</td>
                        <td><textarea class="form-control" name="content" id="">{{$text->content}}</textarea></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="stand/{{$bouton->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$bouton->placement}}</td>
                        <td><input type="text" value="{{$bouton->content}}" name="bouton" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
               
            </tbody>
        </table>
        
      
    </div>
    
    <!-- /.box-body -->

@stop