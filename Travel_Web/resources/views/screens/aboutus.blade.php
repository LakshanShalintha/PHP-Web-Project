@extends('layouts.applayout')
@section('content')

    <div class="overlay">
        <nav class="navbar navbar-expand-lg navbar-light">
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/plan') }}">Plan</a></li>
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

    <div class="about-section container py-5">
        <div class="text-center mb-4">
            <h1 class="display-4">About Us</h1>
            <p class="lead">Welcome to <strong>Travlo</strong> - your ultimate travel companion for exploring the world.</p>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="/images/about-us-banner.jpg" alt="Travlo Team" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p class="text-muted">
                    At <strong>Trevelo</strong>, we are passionate about making your travel experiences seamless and memorable. From exploring exotic destinations to finding the best accommodations and uncovering cultural festivals, we provide everything you need to plan your next adventure. Our platform combines cutting-edge technology with a love for travel to bring you closer to the world.
                </p>
                <p class="text-muted">This project was proudly crafted by a dedicated and enthusiastic team:</p>
                <ul class="list-unstyled">
                    <li><strong>Binara Kaveesha</strong></li>
                    <li><strong>Heshan Navindu</strong></li>
                    <li><strong>Denuwan Kalubowila</strong></li>
                    <li><strong>Lakruwan Kavinda</strong></li>
                    <li><strong>Dilesha Lakshan</strong></li>
                    <li><strong>Gihan Savinda</strong></li>
                    <li><strong>Lakshan Salitha</strong></li>
                    <li><strong>Sachintha Sehan</strong></li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-5">
            <h2 class="font-weight-bold">Why Choose Trevelo?</h2>
            <p class="text-muted">
                With Trevelo, you can effortlessly explore destinations, book accommodations, and immerse yourself in unique cultural experiences. Whether you're an adventurer or a planner, we've got you covered.
            </p>
        </div>
    </div>

@endsection
