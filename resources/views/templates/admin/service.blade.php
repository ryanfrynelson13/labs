@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Service Contenu</h3>      
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
                    @if ($content->id > 12 && $content->id < 17)
                        <tr>
                            <form action="service/{{$content->id}}" method="POST">
                            @csrf
                            @method('PATCH')
                                <td>{{$content->placement}}</td>
                                <td><input type="text" value="{{$content->content}}" name="content" id=""></td>           
                                <td><button class="btn btn-primary" type="submit">Edit</button></td>
                            </form> 
                        </tr>
                    @endif
                    @if ($content->id > 34 && $content->id < 39)
                        <tr>
                            <form action="service/{{$content->id}}" method="POST">
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
</div>

    <div class="text-center">
        <a class="btn btn-success" href="services">View Services</a>
    </div>
    
    <!-- /.box-body -->

@stop