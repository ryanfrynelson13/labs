<!-- Sidebar area -->
<div class="col-md-4 col-sm-5 sidebar">
    <!-- Single widget -->
    <div class="widget-item">
        <form action="/blog-search" class="search-form">
            <input type="text" name="search" placeholder="Search">
            <button class="search-btn"><i class="flaticon-026-search"></i></button>
        </form>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Categories</h2>
        <ul>
            @foreach ($catBar as $categorie)
                <li><a href="#">{{$categorie->categorie}}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Instagram</h2>
        <ul class="instagram">
            <li><img src="img/instagram/1.jpg" alt=""></li>
            <li><img src="img/instagram/2.jpg" alt=""></li>
            <li><img src="img/instagram/3.jpg" alt=""></li>
            <li><img src="img/instagram/4.jpg" alt=""></li>
            <li><img src="img/instagram/5.jpg" alt=""></li>
            <li><img src="img/instagram/6.jpg" alt=""></li>
        </ul>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Tags</h2>
        <ul class="tag">
            @foreach ($tagBar as $tag)
                <li><a href="">{{$tag->tag}}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Quote</h2>
        <div class="quote">
            <span class="quotation">‘​‌‘​‌</span>
            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
        </div>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Add</h2>
        <div class="add">
            <a href=""><img src="img/add.jpg" alt=""></a>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- page section end-->
