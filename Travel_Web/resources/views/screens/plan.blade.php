@extends('layouts.applayout')
@section('content')

    <!-- Header Section -->
    <header class="header" style="background: url('../images/plan.png') no-repeat center center/cover; /*1920x600*/ ">
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
        <div class="header-content text-center">
            <h1>Plan Your Journey</h1>
            <p>Tour Plans</p>
        </div>
    </header>

    <section class="accommodations-section py-5">
        <h3 class="text-center mb-5">Plane Your Journey</h3>
        @foreach($plan as $plan)
            <!-- Trending Cards -->
            <div class="col-md-12 d-flex justify-content-center mb-4">
                <div class="card trending-card">
                    <img src="{{ asset('image/'.$plan->image) }}" alt="{{ $plan->title }}">
                    <div class="overlay"></div>
                    <div class="rating-badge">
                        <span class="badge"><i class="fas fa-sync"></i> {{ $plan->status }}</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $plan->title }}</h5>
                        <p class="card-text">{{ $plan->status }}</p>
                        <p class="card-price">{{ $plan->start_date }}-{{ $plan->start_date }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

@endsection
