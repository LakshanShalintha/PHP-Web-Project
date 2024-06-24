@extends('layouts.applayout')
@section('content')


<!-- Header Section -->
<header class="header" style="background: url('../images/sigiriya.png') no-repeat center center/cover; ">
    <div class="overlay">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">TRAVLO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/destination')}}">Destination</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/accommodations')}}">Accommodations</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/festival')}}">Festival</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/documentaries')}}">Documentaries</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contactus') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/aboutUs') }}">About</a></li>

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    {{ __('Profile') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
            </div>
        </nav>
    </div>
    <!-- Hero Section -->
    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Welcome to the Sri Lanka</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            <form class="form-inline justify-content-center mt-4">
                <div class="form-group mb-2">
                    <label for="location" class="sr-only">Location</label>
                    <input type="text" class="form-control" id="location" placeholder="Location">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="date" class="sr-only">Date</label>
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="form-group mb-2">
                    <label for="people" class="sr-only">People</label>
                    <input type="number" class="form-control" id="people" placeholder="People">
                </div>
                <button type="submit" class="btn btn-custom mb-2">Explore Now</button>
            </form>
        </div>
    </div>
</header>



<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-map-signs fa-2x mb-3"></i>
                <h4>Plan Your Journey</h4>
                <p>Tour Plans</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-home fa-2x mb-3"></i>
                <h4>Home Sweet Home</h4>
                <p>Recommend</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-car fa-2x mb-3"></i>
                <h4>Find Your Ride</h4>
                <p>Available Transportations</p>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-us-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/about_first.png') }}" alt="About Us" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Discover Our Story</h2>
                <p>Welcome to Travlo, your ultimate guide to exploring the wonders of Sri Lanka! We provide curated content and insider tips to help you plan your perfect getaway while promoting sustainable tourism practices.</p>
                <a href="#" class="btn btn-custom">Explore Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Must-Visit Destinations Section -->
<section class="destinations-section py-5">
    <div class="container">
        <h2 class="text-center">Must-Visit Destinations</h2>
        <div id="destinationsCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/sigiriyaCard.png') }}" class="card-img-top" alt="The Lion Rock">
                                <div class="card-body">
                                    <h5 class="card-title">The Lion Rock</h5>
                                    <p class="card-text">Sigiriya Lion Rock Fortress, located in Sri Lanka, is a striking ancient citadel towering amidst lush greenery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/n_archCard.png') }}" class="card-img-top" alt="Nine Arch Bridge">
                                <div class="card-body">
                                    <h5 class="card-title">Nine Arch Bridge</h5>
                                    <p class="card-text">The Nine Arch Bridge is a stunning feat of colonial-era engineering nestled amidst lush greenery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/ambuluwawa.png') }}" class="card-img-top" alt="Ambuluwawa Tower">
                                <div class="card-body">
                                    <h5 class="card-title">Ambuluwawa Tower</h5>
                                    <p class="card-text">Ambuluwawa Tower in Gampola, Sri Lanka, is a striking multi-tiered structure offering panoramic views.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more carousel items here for more destinations -->
            </div>
            <a class="carousel-control-prev" href="#destinationsCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#destinationsCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- Festival / Events Section -->
<section class="festival-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Festival / Events</h2>
        <div id="festivalCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/perahera.png') }}" class="card-img-top" alt="Sri Dalada Perahera">
                                <div class="card-body">
                                    <h5 class="card-title">Sri Dalada Perahera</h5>
                                    <p class="card-text">Kandy, Sri Lanka</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/edm.png') }}" class="card-img-top" alt="Ultra EDM Festival">
                                <div class="card-body">
                                    <h5 class="card-title">Ultra EDM Festival</h5>
                                    <p class="card-text">Colombo, Sri Lanka</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/new_year.png') }}" class="card-img-top" alt="New Year Festival">
                                <div class="card-body">
                                    <h5 class="card-title">New Year Festival</h5>
                                    <p class="card-text">Kandy, Sri Lanka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more carousel items here for more festivals -->
            </div>
            <a class="carousel-control-prev" href="#festivalCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#festivalCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- Journey Journal / Documentaries Section -->
<section class="documentaries-section py-5">
    <div class="container">
        <h2 class="text-center">Journey Journal</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/temple-of-tooth.png') }}" class="card-img-top" alt="Temple of the Tooth">
                    <div class="card-body">
                        <h5 class="card-title">The Temple of the Tooth</h5>
                        <p class="card-text">The Temple of the Tooth, located in the heart of Kandy, Sri Lanka, is a sacred haven steeped in centuries of reverence, where devotees gather to pay homage.</p>
                        <a href="#" class="btn btn-custom">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/ganagaramaya.png') }}" class="card-img-top" alt="Colombo to Jaffna">
                    <div class="card-body">
                        <h5 class="card-title">Colombo to Jaffna</h5>
                        <p class="card-text">The journey from Colombo to Jaffna is a captivating experience that traverses diverse landscapes and cultural nuances. Starting from the vibrant.</p>
                        <a href="#" class="btn btn-custom">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/paradise.png') }}" class="card-img-top" alt="The Island Paradise">
                    <div class="card-body">
                        <h5 class="card-title">The Island Paradise</h5>
                        <p class="card-text">Sri Lanka, often referred to as the “Island Paradise,” is a breathtaking destination renowned for its natural beauty and cultural richness.</p>
                        <a href="#" class="btn btn-custom">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
