<!-- Header section -->

    <header class="header-section">
        @foreach ($medias as $media)
            @if ($media->placement === 'nav logo')
            <div class="logo">
            
                    <img src="{{$media->media_path}}" alt=""><!-- Logo -->
                </div>
            @endif
            
        @endforeach
      
        
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                @foreach ($contents as $content)
                    @if ($content->placement === 'nav 1')
                        <li class="{{request()->is("/")?"active":null}}"><a href="/">{{$content->content}}</a></li>
                    @endif
                    @if ($content->placement === 'nav 2')
                         <li class="{{request()->is("services")?"active":null}}"><a href="services">{{$content->content}}</a></li>
                    @endif
                    @if ($content->placement === 'nav 3')
                        <li class="{{request()->is("blog*")?"active":null}}"><a href="blog">{{$content->content}}</a></li>
                    @endif
                    @if ($content->placement === 'nav 4')
                        <li class="{{request()->is("contact")?"active":null}}"><a href="contact">{{$content->content}}</a></li>
                    @endif 
                @endforeach
            </ul>
        </nav>
        
    </header>


<!-- Header section end -->