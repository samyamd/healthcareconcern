<header id="header" class="w-100">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('assets/images/logo.png')}}" alt="HEALTH CONCERN NEPAL">
        </a>
        <nav id="navbar" class="navbar navbar-expand-md justify-content-between px-0">

            {{-- <h1 class="logo navbar-brand"><a href="index.html">Tempo</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <button class="navbar-toggler">
                <i class="fas fa-bars fa-2x"></i>
            </button>

            <div class="sidenav" id="mySidenav">
                <i class="fas fa-times text-white d-md-none" id="sidebar-close"></i>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('our-team')}}">Our Team</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('gallery')}}">Gallery</a></li>
                </ul>
            </div>
        </nav><!-- .navbar -->
    </div>
</header>