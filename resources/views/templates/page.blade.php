	<!-- page section -->
	<div class="page-section spad">
	

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach ($articles as $article)
						@if ($article->publish)
							<div class="post-item">
								<div class="post-thumbnail">
									<img src="{{$article->photo}}" alt="">
									<div class="post-date">
										<h2>{{$article->created_at->day}}</h2>
										<h3>{{$article->created_at->shortMonthName}} {{$article->created_at->year}}</h3>
									</div>
								</div>
								<div class="post-content">
									<h2 class="post-title">{{$article->titre}}</h2>
									<div class="post-meta">
										@foreach ($categories as $categorie)
											@if($categorie->id === $article->categorie)
												<a href="">{{$categorie->categorie}}</a>
											@endif
										@endforeach
										<a href="">
										@foreach ($tagliens as $lien)
											@if ($lien->article_id===$article->id)
												@foreach ($tags as $tag)
													@if ($tag->id === $lien->tag_id)
														{{ucfirst($tag->tag)}}
													@endif
												@endforeach
												
											@endif
											
										@endforeach
										</a>
										
										<a href="">{{$article->commentaires->count()}} Comments</a>
									</div>
									<p>{{substr($article->content, 0, 317)}}...</p>
									<a href="blog-post/{{$article->id}}" class="read-more">Read More</a>
								</div>
							</div>
						@endif

					@endforeach
					
					<!-- Pagination -->
					<div class="page-pagination">
							{{ $articles->links() }}
					</div>
				</div>

				