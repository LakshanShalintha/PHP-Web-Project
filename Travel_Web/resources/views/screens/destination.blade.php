@extends('layouts.applayout')
@section('content')

    <!-- Header Section -->
    <header class="header" style="background: url('../images/destination.png') no-repeat center center/cover; ">
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
                        <li class="nav-item"><a class="nav-link" href="{{url('/accommodations')}}">Accommodations</a>
                        </li>
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
            <h1>Exploring the Best Destinations</h1>
            <p>Must-Visit Destinations</p>
        </div>
    </header>

    <!-- Recommend Section -->
    <section class="recommend-section text-center py-5">
        <div class="container">
            <h2>Exploring the Best
                Destinations</h2>
        </div>
    </section>


    <!-- Must-Visit Destinations Section -->
    <section class="destinations-section py-5">
        <div class="container">
            <div id="destinationsCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach($destinations as $des)
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('image/' . $des->image) }}" class="card-img-top"
                                             alt="{{ $des->name }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$des->title}}</h5>
                                            <p class="card-text">{{$des->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--                        <div class="col-md-4">--}}
                            {{--                            <div class="card">--}}
                            {{--                                <img src="{{ asset('images/n_archCard.png') }}" class="card-img-top" alt="Nine Arch Bridge">--}}
                            {{--                                <div class="card-body">--}}
                            {{--                                    <h5 class="card-title">Nine Arch Bridge</h5>--}}
                            {{--                                    <p class="card-text">The Nine Arch Bridge is a stunning feat of colonial-era engineering nestled amidst lush greenery.</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-md-4">--}}
                            {{--                            <div class="card">--}}
                            {{--                                <img src="{{ asset('images/ambuluwawa.png') }}" class="card-img-top" alt="Ambuluwawa Tower">--}}
                            {{--                                <div class="card-body">--}}
                            {{--                                    <h5 class="card-title">Ambuluwawa Tower</h5>--}}
                            {{--                                    <p class="card-text">Ambuluwawa Tower in Gampola, Sri Lanka, is a striking multi-tiered structure offering panoramic views.</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
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


    <!-- Destinations Section -->
    <section class="destinations-section2 py-5">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="card col-md-6 mb-4">
                        <img src="{{ asset('images/gall_port.png') }}" class="card-img-top" alt="Gall Fort">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title">Gall Fort</h5>
                            <p class="card-text">More Details...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/gall_port.png') }}" class="card-img-top" alt="Gall Fort">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title">Gall Fort</h5>
                            <p class="card-text">More Details...</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card col-md-6 mb-4">
                        <img src="{{ asset('images/gall_port.png') }}" class="card-img-top" alt="Gall Fort">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title">Gall Fort</h5>
                            <p class="card-text">More Details...</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card col-md-6 mb-4">
                        <img src="{{ asset('images/gall_port.png') }}" class="card-img-top" alt="Gall Fort">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title">Gall Fort</h5>
                            <p class="card-text">More Details...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
