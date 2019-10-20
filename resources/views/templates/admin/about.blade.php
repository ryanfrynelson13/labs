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
      <h3 class="box-title">About Contenu</h3>      
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
                    <form action="about/{{$titre1->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$titre1->placement}}</td>
                        <td><input type="text" value="{{$titre1->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="about/{{$bleu->id}}" method="Post">
                    @csrf
                    @method('PATCH')
                        <td>{{$bleu->placement}}</td>
                        <td><input type="text" value="{{$bleu->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="about/{{$titre2->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$titre2->placement}}</td>
                        <td><input type="text" value="{{$titre2->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="about/{{$text1->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$text1->placement}}</td>
                        <td><textarea class="form-control" rows="5" name="area" id="">{{$text1->content}}</textarea></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="about/{{$text2->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$text2->placement}}</td>
                        <td><textarea class="form-control" rows="5"  name="area" id="">{{$text2->content}}</textarea></td>             
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="about/{{$bouton->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>{{$bouton->placement}}</td>
                        <td><input type="text" value="{{$bouton->content}}" name="content" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="media/video/{{$image->id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>Image Video</td>
                        <td><input type="file"  name="video" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="media/video/{{$video->id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>Ajouter Fichier Video</td>
                        <td><input type="file"  name="video" id=""></td>           
                        <td><button class="btn btn-primary" type="submit">Ajouter</button></td>
                    </form> 
                </tr>
                <tr>
                    <form action="media/lien/{{$video->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <td>Ajouter Lien Internet</td>
                        <td><input type="text" placeholder="lien" name="lien" id=""></td>          
                        <td><button class="btn btn-primary" type="submit">Ajouter</button></td>
                    </form> 
                </tr>               
            </tbody>
        </table>
       
      
    </div>
    
    <!-- /.box-body -->

@stop