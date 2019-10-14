<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($trois as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$item->logo}}"></i>
                            </div>
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->text}}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            @foreach ($contents as $content)
                @if ($content->placement === 'about titre part1')
                    <div class="section-title">
                        <h2>{{$content->content}}
                @endif
                @if ($content->placement === 'about titre bleu')
                     <span>{{$content->content}}</span>
                @endif
                @if ($content->placement === 'about titre part2')
                     {{$content->content}}</h2>
                @endif
                @if ($content->placement === 'about text 1')
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>{{$content->content}}</p>
                        </div>
                @endif
                @if ($content->placement === 'about text 2')
                    <div class="col-md-6">
                        <p>{{$content->content}}</p>
                    </div>
                @endif
                @if ($content->placement === 'about bouton contenu')
                    </div>
                    <div class="text-center mt60">
                        <a href="" class="site-btn">{{$content->content}}</a>
                    </div>
                @endif
            @endforeach
              
           
               
           
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @foreach ($medias as $media)
                            @if ($media->placement === 'img_video')
                                <img src="{{$media->media_path}}" alt="">
                            @endif
                            @if ($media->placement === 'video_about')
                                <a href="{{$media->media_path}}" class="video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            @endif
                        @endforeach
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->
