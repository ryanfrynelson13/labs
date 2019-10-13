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
            <!-- feature item -->
            {{-- @foreach ($six as $service)
                <h2>{{$service->titre}}</h2>
            @endforeach --}}
            <div class="col-md-4 col-sm-4 features">
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-002-caliper"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-019-coffee-cup"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-020-creativity"></i>
                    </div>
                </div>
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-037-idea"></i>
                    </div>
                    <div class="service-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-025-imagination"></i>
                    </div>
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-008-team"></i>
                    </div>
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
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
