@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Testimonial Contenu</h3>      
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
                    <form action="testimonial/{{$titre->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$titre->placement}}</td>
                        <td><input type="text" value="{{$titre->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
               
            </tbody>
        </table>
        
      
    </div>
    
    <!-- /.box-body -->

@stop