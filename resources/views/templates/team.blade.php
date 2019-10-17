<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach ($contents as $content)
                @if($content->placement === 'team titre part1')
                    <h2>{{$content->content}}
                @endif
                @if($content->placement === 'team titre bleu')
                    <span>{{$content->content}}</span>
                @endif
                @if($content->placement === 'team titre part2')
                {{$content->content}}</h2>
                @endif
            @endforeach
              
        </div>
        <div class="row">
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member"> 
                    @if ($team->count()>=1)
                        <img src="{{$team[0]->photo}}" alt="">
                        <h2>{{$team[0]->name}}</h2>
                        <h3>{{$team[0]->title}}</h3>
                    @else
                        <img src="storage/john/user-male-icon.png" alt="">
                        <h2>John Doe</h2>
                        <h3>Unknown</h3>
                    @endif                   
                        
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    @if ($boss->count()===1)
                        <img src="{{$boss[0]->photo}}" alt="">
                        <h2>{{$boss[0]->name}}</h2>
                        <h3>{{$boss[0]->title}}</h3>
                    @else
                        <img src="storage/john/user-male-icon.png" alt="">
                        <h2>John Doe</h2>
                        <h3>CEO</h3>
                    @endif    
                   
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    @if ($team->count()===2)
                        <img src="{{$team[1]->photo}}" alt="">
                        <h2>{{$team[1]->name}}</h2>
                        <h3>{{$team[1]->title}}</h3>
                    @else
                        <img src="storage/john/user-male-icon.png" alt="">
                        <h2>John Doe</h2>
                        <h3>Unknown</h3>
                    @endif      
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->