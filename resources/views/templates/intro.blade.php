<!-- Intro Section -->
<div class="hero-section">   
    <div class="hero-content">
        <div class="hero-center">
        @foreach ($medias as $media)
        @if ($media->placement === 'carousel logo')
            <img src="{{$media->media_path}}" alt="">
        @endif        
        @endforeach
        @foreach ($contents as $text)
            @if ($text->placement === 'carousel text')
                    <p>{{$text->content}}</p>
            @endif
        @endforeach
            
        </div>
    </div> 
        
    
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carousel as $image)
            <div class="item  hero-item" data-bg={{$image->media_path}}></div>
        @endforeach        
        
    </div>
</div>
<!-- Intro Section -->
