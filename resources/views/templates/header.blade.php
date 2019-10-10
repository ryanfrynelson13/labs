<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{request()->is("/")?"active":null}}"><a href="/">Home</a></li>
            <li class="{{request()->is("services")?"active":null}}"><a href="services">Services</a></li>
            <li class="{{request()->is("blog*")?"active":null}}"><a href="blog">Blog</a></li>
            <li class="{{request()->is("contact")?"active":null}}"><a href="contact">Contact</a></li>
           
        </ul>
    </nav>
</header>
<!-- Header section end -->