@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
    <div class="row">
        @foreach ($images as $image)
             <div class="col-md-4">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive " src="{{$image->media_path}}" alt="carousel picture">
                    <br>
                    <div class="text-center">
                        <form action="/admin/media/carousel/{{$image->id}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                            <input type="file" name="media" id="">
                            <br>
                            <button class="btn btn-primary" type="submit">Change</button>
                        </form>
                        <form action="/admin/media/carousel/{{$image->id}}/delete" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('DELETE')
                            <br>
                            <br>
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                            
                        
                    </div>
                                       
    
                   
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
    
                <!-- About Me Box -->
                
                <!-- /.box -->
            </div>
            
        @endforeach
       
    </div>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <br>
    <div class="text-center row p-5">
        <div class="text-center col-md-4 offset-4">
            <form action="/admin/media/carousel/create" enctype="multipart/form-data" method="POST">
                @csrf
                @method('GET')
                <input type="file" name="image" id="">
                <br>
                <button class="btn btn-success">Ajouter</button>
            </form>
           
        </div>

    </div>
@stop
