<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            @foreach ($contents as $content)
                @if ($content->id === 13)
                    <h2>{{$content->content}}
                @endif
                @if ($content->id === 14)
                    <span>{{$content->content}}</span> 
                @endif
                @if ($content->id === 15)
                        {{$content->content}}</h2>
                    </div>
                    <div class="row">                        
                        @foreach ($services as $service)
                            <div class="col-md-4 col-sm-6">
                                <div class="service">
                                    <div class="icon">
                                        <i class="{{$service->logo}}"></i>
                                    </div>
                                    <div class="service-text">
                                        <h2>{{$service->titre}}</h2>
                                        <p>{{$service->text}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- single service -->
                        
                        
                    </div>
                    {{ $services->links() }}
                @endif
                @if ($content->id === 16)
                    <div class="text-center">
                        <a href="" class="site-btn">{{$content->content}}</a>
                    </div>
                @endif
            @endforeach
            
        
       
    </div>
</div>
<!-- services section end -->