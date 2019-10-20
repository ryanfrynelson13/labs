@extends('adminlte::page')



@section('title', 'AdminLTE')
@section('content_header')
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
          <h3 class="box-title">Tags</h3>      
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
                <tbody>
                   

                    @foreach ($tagliens as $item)
                         @foreach ($tags as $tag)
                             @if ($item->tag_id === $tag->id)
                                <tr>
                                    <form action="{{route('tags.update',$tag->id)}}?lien={{$item->id}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                        <td><input type="text" value="{{$tag->tag}}" name="tag" id=""></td>  
                                        <td><button class="btn btn-primary" type="submit">Edit</button></td>
                                    </form> 
                                    <form action="{{route('tags.destroy',$tag->id)}}?lien={{$item->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <td><button class="btn btn-danger" type="submit">Delete</button></td>
                                    </form>
                                </tr>
                             @endif
                        @endforeach
                    @endforeach
                    <tr>
                        <form action="{{route('tags.store')}}?article={{$article->id}}" method="POST">
                                @csrf
                                @method('POST')
                                    <td><input type="text" name="tag" id=""></td>  
                                    <td><button class="btn btn-success" type="submit">Ajouter</button></td>
                        </form> 
                    </tr>
                    
                   
                </tbody>
            </table>
            
            
          
        </div>
</div>
        <form action="{{route('articles.show',$article->id)}}" method="GET">
        @csrf
        @method('GET')
            <div class="d-flex justify-content-center">
                <button class="btn btn-warning" type="submit">Terminer</button>
            </div>
        </form>


@stop
