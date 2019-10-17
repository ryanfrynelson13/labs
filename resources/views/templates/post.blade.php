	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="/{{$article->photo}}" alt="">
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
							<p>{{$article->content}}</p>
						</div>
						<!-- Post Author -->
						@foreach ($auteurs as $auteur)
							@if ($auteur->id===$article->user_id)
								<div class="author">
									<div class="avatar">
										@if ($auteur->photo!=null)
											<img src="/{{$auteur->photo}}" alt="">
										@else
											<img src="/storage/john/user-male-icon.png" alt="">
										@endif
										
									</div>
									<div class="author-info">
										<h2>{{$auteur->name}}, <span>Author</span></h2>
										<p>{{$auteur->description}} </p>
									</div>
								</div>
							@endif
						@endforeach
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments ({{$article->commentaires->count()}})</h2>
							<ul class="comment-list">
								@foreach ($article->commentaires as $comment)
									<li>
										<div class="avatar">
											<img src="{{$comment->photo}}" alt="">
										</div>
										<div class="commetn-text">
											<h3>{{$comment->name}} | {{$comment->created_at->day}} {{$comment->created_at->shortMonthName}}, {{$comment->created_at->year}} | Reply</h3>
											<p>{{$comment->commentaire}}</p>
										</div>
									</li>
								@endforeach								
								
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form action="/comment/{{$article->id}}" class="form-class" method="POST">
								@csrf
								@method('POST')
									<div class="row">
										<div class="col-sm-6">
											<input type="text" value="{{old('name')}}" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" {{old('email')}} name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" {{old('subject')}} name="subject" placeholder="Subject">
											<textarea name="message" {{old('message')}} placeholder="Message"></textarea>
											<button type="submit" class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>