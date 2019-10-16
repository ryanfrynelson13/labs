<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        @foreach ($contents as $content)
            @if ($content->id === 35)
                <div class="section-title">
                    <h2>{{$content->content}}
            @endif
            @if ($content->id === 36)
                <span>{{$content->content}}</span>
            @endif
            @if ($content->id === 37)
                {{$content->content}}</h2>
            @endif
            @if ($content->id === 38)
        </div>
        <div class="row">
            
            <div class="col-md-4 col-sm-4 features">
                @foreach ($debut as $item)
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->text}}</p>
                        </div>
                        <div class="icon">
                            <i class="{{$item->logo}}"></i>
                        </div>
                    </div>
                @endforeach
                
               
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($fin as $item)
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->text}}</p>
                        </div>
                        <div class="icon">
                            <i class="{{$item->logo}}"></i>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">{{$content->content}}</a>
        </div>
    </div>
</div>
            @endif
        @endforeach
          
       
<!-- features section end-->
