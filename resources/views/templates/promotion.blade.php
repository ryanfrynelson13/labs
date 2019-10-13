<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @foreach ($contents as $content)
                    @if ($content->placement === 'promotion titre')
                        <h2>{{$content->content}}</h2>
                    @endif
                    @if ($content->placement === 'promotion text')
                        <p>{{$content->content}}</p>
                    @endif
                    @if ($content->placement === 'promotion bouton')
                        </div>
                        <div class="col-md-3">
                            <div class="promo-btn-area">
                                <a href="" class="site-btn btn-2">{{$content->content}}</a>
                    @endif
                @endforeach
                
                
            
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->
