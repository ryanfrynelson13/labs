@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Team Contenu</h3>      
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
                    <form action="team/{{$titre1->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$titre1->placement}}</td>
                        <td><input type="text" value="{{$titre1->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="team/{{$bleu->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$bleu->placement}}</td>
                        <td><input type="text" value="{{$bleu->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="team/{{$titre2->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$titre2->placement}}</td>
                        <td><input type="text" value="{{$titre2->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
               
            </tbody>
        </table>
        
      
    </div>
    
    <!-- /.box-body -->

@stop