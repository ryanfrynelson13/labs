<!-- page section -->
<div class="page-section spad">
	

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">                
                @if (count($search)===0)                    
                    <div class="alert alert-danger" >
                           <ul class="list-group bg-danger">
                                <li class="list-group-item bg-danger"> Nothing Found...</li>                              
                           </ul>
                       </div>
                @else
                       
                   
                   @foreach ($search as $item)
                       @if ($item->publish)
                           <div class="post-item">
                               <div class="post-thumbnail">
                                   <img src="{{$item->photo}}" alt="">
                                   <div class="post-date">
                                       <h2>{{$item->created_at->day}}</h2>
                                       <h3>{{$item->created_at->shortMonthName}} {{$item->created_at->year}}</h3>
                                   </div>
                               </div>
                               <div class="post-content">
                                   <h2 class="post-title">{{$item->titre}}</h2>
                                   <div class="post-meta">
                                       @foreach ($categories as $categorie)
                                           @if($categorie->id === $item->categorie)
                                               <a href="">{{$categorie->categorie}}</a>
                                           @endif
                                       @endforeach
                                       <a href="">
                                       @foreach ($tagliens as $lien)
                                           @if ($lien->article_id===$item->id)
                                               @foreach ($tags as $tag)
                                                   @if ($tag->id === $lien->tag_id)
                                                       {{ucfirst($tag->tag)}}
                                                   @endif
                                               @endforeach
                                               
                                           @endif
                                           
                                       @endforeach
                                       </a>
                                       
                                       <a href="">{{$item->commentaires->count()}} Comments</a>
                                   </div>
                                   <p>{{substr($item->content, 0, 317)}}...</p>
                                   <a href="blog-post/{{$item->id}}" class="read-more">Read More</a>
                               </div>
                           </div>
                       @endif
   
                   @endforeach
                @endif           
                
                <!-- Pagination -->
                <div class="page-pagination">
                        
                </div>
            </div>

            