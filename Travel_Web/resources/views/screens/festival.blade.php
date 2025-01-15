@extends('layouts.applayout')
@section('content')
    <!-- Header Section -->
    <header class="header" style="background: url('../images/festival.png') no-repeat center center/cover; ">
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
            <h1>Festival / Events</h1>
            <p>Customized Experiences</p>
        </div>
    </header>

    <!-- Recommend Section -->
    <section class="recommend-section text-center py-5">
        <div class="container">
            <h2>Festival / Events</h2>
        </div>
    </section>

    <main>
        @foreach($festival as $festival)
            <div class="container my-5">
                <div class="card custom-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('image/'.$festival->image) }}" class="card-img"
                                 alt={{$festival->title}}>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$festival->title}}</h5>
                                <p class="card-text"><small class="text-muted">{{$festival->location}}
                                        | {{$festival->country}}</small></p>
                                <p class="card-text">
                                    {{$festival->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>

@endsection
