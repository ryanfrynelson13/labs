@extends('adminlte::page')


@section('title', 'AdminLTE')
@section('content_header')
<div class="text-center">
        <h2>Articles</h2>
    </div>

<div class="row">
    
    @foreach ($articles as $article)
         <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                <img class="profile-user-img img-responsive " src="/{{$article->photo}}" alt="image article">                
                <h3 class="profile-username text-center">{{$article->titre}}</h3>
                <div > 
                    @foreach ($users as $auteur)
                        @if ($auteur->id === $article->user_id)
                            <p class="text-muted text-center">{{$auteur->name}}</p>
                        @endif
                        
                    @endforeach
                              
                    <ul class="list-group list-group-unbordered">

                        <li class="list-group-item">
                        <b>Commentaires</b> <a class="pull-right">{{$article->commentaires->count()}}</a>
                        </li>
                        @foreach ($categories as $categorie)
                        @if ($categorie->id === $article->categorie)
                            <li class="list-group-item">
                        
                                <b>Categorie</b> <a class="pull-right">{{$categorie->categorie}}</a>
                            </li>
                        @endif
                        
                        @endforeach
                        <li class="list-group-item">
                            <b>Tag(s)</b><a class="pull-right">
                        @foreach ($tagliens as $item)
                         @if ($item->article_id === $article->id)
                             @foreach ($tags as $tag)
                                 @if ($tag->id === $item->tag_id)
                                     {{$tag->tag}}
                                 @endif
                             @endforeach
                         @endif
                            
                               
                            
                        @endforeach
                        </a>
                        </li>
                        <li class="list-group-item">
                            <b>Etat</b> <a class="pull-right">
                              @if ($article->publish)
                                  Publié
                              @else
                                  En Attente
                              @endif
                            </a>
                        </li>
                        
                       
                        
                    </ul>
                    <div>

                    </div>
                    <div class="text-center">
                        <form action="{{route('articles.show',$article->id)}}" method="GET">
                        @csrf
                        @method('GET')
                            
                            <button class="btn btn-success" type="submit">View</button>
                        </form>
                    </div>      
                   
                        
                    
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
<br>
  <div class="text-center">
    <form action="{{route('articles.create')}}" method="GET">
    @csrf
    @method('GET')
        <button type="submit" class="btn btn-lg btn-success">Ajouter Article</button>
    </form>
  
  </div>
@stop