@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Contact Contenu</h3>      
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
                @foreach ($contents as $content)
                   
                    @if ($content->id > 22 && $content->id < 30)
                        <tr>
                            <form action="contact/{{$content->id}}" method="POST">
                            @csrf
                            @method('PATCH')
                                <td>{{$content->placement}}</td>
                                <td><textarea class="form-control" name="content" id="">{{$content->content}}</textarea></td>           
                                <td><button class="btn btn-primary" type="submit">Edit</button></td>
                            </form> 
                        </tr>
                    @endif
                    @if ($content->id > 29 && $content->id < 35)
                        <tr>
                            <form action="contact/{{$content->id}}" method="POST">
                            @csrf
                            @method('PATCH')
                                <td>{{$content->placement}}</td>
                                <td><input type="text" value="{{$content->content}}" name="content" id=""></td>           
                                <td><button class="btn btn-primary" type="submit">Edit</button></td>
                            </form> 
                        </tr>
                    @endif
                @endforeach
               
               
               
               
            </tbody>
        </table>
        
      
    </div>
    
    <!-- /.box-body -->

@stop