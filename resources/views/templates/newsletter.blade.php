<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            @foreach ($contents as $content)
                @if ($content->id === 39)
                    <div class="col-md-3">
                        <h2>{{$content->content}}</h2>
                    </div>
                @endif
                @if ($content->id === 40)
                    <div class="col-md-9">
                        <!-- newsletter form -->
                        <form action="newsletter" class="nl-form">
                            <input type="text" name="email" placeholder="{{$content->content}}">
                @endif
                @if ($content->id === 41)
                            <button type="submit" class="site-btn btn-2">{{$content->content}}</button>
                        </form>
                    </div>
                @endif
            @endforeach
            
            
                    
           
        </div>
    </div>
</div>
<!-- newsletter section end-->