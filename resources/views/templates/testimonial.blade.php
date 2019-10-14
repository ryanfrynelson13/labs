	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						@foreach ($contents as $content)
							@if ($content->placement === 'testimonials titre')
								<h2>{{$content->content}}</h2>
							@endif
						@endforeach
						
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						@foreach ($testimonials as $testimonial)
							<div class="testimonial">
								<span>‘​‌‘​‌</span>
								<p>{{$testimonial->quote}}</p>
								<div class="client-info">
									<div class="avatar">
										<img src="{{$testimonial->photo}}" alt="">
									</div>
									<div class="client-name">
										<h2>{{$testimonial->name}}</h2>
										<p>{{$testimonial->title}}</p>
									</div>
								</div>
							</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->