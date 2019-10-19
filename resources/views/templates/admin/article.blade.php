@extends('adminlte::page')


@section('title', 'AdminLTE')

@section('css')
    {{-- <link rel="stylesheet" href="/css/all.css"> --}}
    
@endsection
@section('content_header')

<div class="d-flex justify-content-around p-5">
    <form action="{{route('articles.edit',$article->id)}}" method="GET">
    @csrf
    @method('GET')
        <button class="btn btn-lg btn-primary" type="submit">Modifier Contenu</button>
    </form>
    <a href="{{route('tags.index')}}?article={{$article->id}}" class="btn btn-lg btn-primary" type="submit">Modifier Tags</a>
    @if (Auth::user()->isAdmin())       

        @if (!$article->publish)
        <form action="/published/{{$article->id}}" method="POST">
        @csrf
        @method('PATCH')
                    
            <button class="btn btn-lg btn-success" type="submit">Publish</button>
        </form>     
        @endif


    @endif
    <form action="{{route('articles.destroy',$article->id)}}" method="POST">
    @csrf
    @method('DELETE')
        <button class="btn btn-lg btn-danger" type="submit">Delete Article</button>
    </form> 
 
   
</div>

<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="/{{$article->photo}}" alt="">							
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->titre}}</h2>
							<div class="post-meta pb-2">  
                                <span>Catégorie:</span>                              
                                <a href="">{{$categorie->categorie}}</a>
                                <br>
                                <span>Tags:</span>
								<a href="">
                                    @foreach ($tags as $tag)
                                        @foreach ($tagliens as $item)
                                            @if ($item->article_id === $article->id)
                                                @if ($tag->id === $item->tag_id)
                                                {{$tag->tag}}
                                                @endif
                                            @endif
                                            
                                        @endforeach

                                        
                                        
                                    @endforeach
                                </a>								
							</div>
							<p>{{$article->content}}</p>
						</div>
						
						<!-- Commert Form -->						
					</div>
                </div>
            </div>
        </div>
    </div>
   
   

@stop