@extends('layouts.applayout')
@section('content')
<!-- Header Section -->
<header class="header" style="background: url('../images/documentaries.png') no-repeat center center/cover;">
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
        <h1>Documentaries</h1>
        <p>Journey Journal</p>
    </div>
</header>

<main>
    <div class="container my-5">
        <section class="documentaries">
            <div class="card custom-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{ asset('images/maligawa.png') }}" class="card-img" alt="The Temple of Tooth">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">The Temple of Tooth</h5>
                            <p class="card-text">
                                Sri Dalada Maligawa, also known as the Temple of the Sacred Tooth Relic, stands as a majestic testament to Sri Lanka's rich cultural heritage. Nestled amidst the bustling city of Kandy, this revered temple houses the relic of the Buddha's tooth, making it one of the holiest sites in the Buddhist world.
                            </p>
                            <p class="card-text">
                                Its architectural splendor, adorned with intricate carvings and vibrant paintings, serves as a homage to the island's spiritual legacy.
                            </p>
                            <a href="#" class="btn btn-dark">Read More... →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection
