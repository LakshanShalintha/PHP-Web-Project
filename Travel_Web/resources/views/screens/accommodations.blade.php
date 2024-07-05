@extends('layouts.applayout')
@section('content')

    <!-- Header Section -->
    <header class="header" style=" background: url('../images/accommodations.jpg') no-repeat center center/cover; /*1920x600*/">
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
        <div class="header-content text-center">
            <h1>Home Sweet Home</h1>
            <p>Recommend</p>
        </div>
    </header>

    <!-- Recommend Section -->
    <section class="recommend-section text-center py-5">
        <div class="container">
            <h2>Home Sweet Home</h2>
            <div class="btn-group mt-4" role="group" aria-label="Basic example">
                <button type="button" class="btn custom-btn active">Accommodations</button>
                <button type="button" class="btn custom-btn" onclick="window.location='{{ route('restaurants') }}'">Restaurants</button>
                <button type="button" class="btn custom-btn">Reservations</button>
            </div>
        </div>
    </section>

    <!-- Accommodations Section -->
    <section class="accommodations-section py-5">
        <h3 class="text-center">Accommodations</h3>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Accommodation Cards -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card accommodation-card">
                        <img src="{{ asset('images/cardAccommodation.png') }}" class="card-img-top" alt="Oak Ray Ella Gap Hotel">
                        <div class="rating-badge">
                            <span class="badge badge-dark"><i class="fas fa-star"></i> 4.7 (283)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Oak Ray Ella Gap Hotel</h5>
                            <p class="card-text">Passara Road, Ella</p>
                            <p class="card-price">3500 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card accommodation-card">
                        <img src="{{ asset('images/cardAccommodation.png') }}" class="card-img-top" alt="Oak Ray Ella Gap Hotel">
                        <div class="rating-badge">
                            <span class="badge badge-dark"><i class="fas fa-star"></i> 4.7 (283)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Oak Ray Ella Gap Hotel</h5>
                            <p class="card-text">Passara Road, Ella</p>
                            <p class="card-price">3500 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card accommodation-card">
                        <img src="{{ asset('images/cardAccommodation.png') }}" class="card-img-top" alt="Oak Ray Ella Gap Hotel">
                        <div class="rating-badge">
                            <span class="badge badge-dark"><i class="fas fa-star"></i> 4.7 (283)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Oak Ray Ella Gap Hotel</h5>
                            <p class="card-text">Passara Road, Ella</p>
                            <p class="card-price">3500 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Popular / Trending Section -->
    <section class="trending-section py-5">
        <h3 class="text-center">Popular / Trending</h3>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Trending Cards -->
                <div class="col-md-12 d-flex justify-content-center mb-4">
                    <div class="card trending-card">
                        <img src="{{ asset('images/cardTrending.png') }}" alt="Marino Beach Colombo">
                        <div class="overlay"></div>
                        <div class="rating-badge">
                            <span class="badge"><i class="fas fa-star"></i> 4.5 (123)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marino Beach Colombo</h5>
                            <p class="card-text">Colombo</p>
                            <p class="card-price">12,000 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center mb-4">
                    <div class="card trending-card">
                        <img src="{{ asset('images/cardTrending.png') }}" alt="Marino Beach Colombo">
                        <div class="overlay"></div>
                        <div class="rating-badge">
                            <span class="badge "><i class="fas fa-star"></i> 4.5 (123)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marino Beach Colombo</h5>
                            <p class="card-text">Colombo</p>
                            <p class="card-price">12,000 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center mb-4">
                    <div class="card trending-card">
                        <img src="{{ asset('images/cardTrending.png') }}" alt="Marino Beach Colombo">
                        <div class="overlay"></div>
                        <div class="rating-badge">
                            <span class="badge "><i class="fas fa-star"></i> 4.5 (123)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marino Beach Colombo</h5>
                            <p class="card-text">Colombo</p>
                            <p class="card-price">12,000 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

