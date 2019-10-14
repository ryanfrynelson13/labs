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
                    <img src="{{$team1[0]->photo}}" alt="">
                    <h2>{{$team1[0]->name}}</h2>
                    <h3>{{$team1[0]->title}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{$boss[0]->photo}}" alt="">
                    <h2>{{$boss[0]->name}}</h2>
                    <h3>{{$boss[0]->title}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{$team2[0]->photo}}" alt="">
                    <h2>{{$team2[0]->name}}</h2>
                    <h3>{{$team2[0]->title}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->