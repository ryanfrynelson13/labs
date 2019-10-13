<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            @foreach ($contents as $content)             
                @if ($content->id === 23)
                    <div class="col-md-5 col-md-offset-1 contact-info col-push">
                        <div class="section-title left">
                            <h2>{{$content->content}}</h2>
                        </div> 
                @endif
                @if ($content->id === 24)
                    <p>{{$content->content}} </p>
                @endif
                @if ($content->id === 25)
                    <h3 class="mt60">{{$content->content}}</h3>
                @endif
                @if ($content->id === 26)
                    <p class="con-item">{{$content->content}}<br> 
                @endif
                @if ($content->id === 27)
                    05200 Arévalo </p>
                @endif
                @if ($content->id === 28)
                    <p class="con-item">{{$content->content}}</p>
                @endif
                @if ($content->id === 29)
                        <p class="con-item">{{$content->content}}</p>
                    </div>
                @endif                
                @if ($content->id === 30)
                 <div class="col-md-6 col-pull">
                        <form class="form-class" id="con_form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="name" placeholder="{{$content->content}}">
                                </div>
                @endif
                @if ($content->id === 31)                    
                    <div class="col-sm-6">
                        <input type="text" name="email" placeholder="{{$content->content}}">
                    </div>
                @endif
                @if ($content->id === 32)
                    <div class="col-sm-12">
                        <input type="text" name="subject" placeholder="{{$content->content}}">
                @endif
                @if ($content->id === 33)
                    <textarea name="message" placeholder="{{$content->content}}"></textarea>
                @endif
                @if ($content->id === 34)
                    <button class="site-btn">{{$content->content}}</button>
                @endif
            @endforeach
            <!-- contact info -->
            
                
            
                
              
              
            <!-- contact form -->
           
                        
                            
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->