@extends('layouts.applayout')
@section('content')
    <section class="contact-us active mb-5">
        <!-- Header Section -->
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

        <div class="content mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mr-auto">
                        <h2>Contact Us</h2>
                        <p class="mb-5">Need assistance with your order? Our customer service team is ready to help!
                            Whether it's tracking your order or product inquiries, we're here for you. Reach out via
                            email at support@example.com or give us a call at +1 (800) 555-1234.
                            We're committed to providing prompt assistance. Your satisfaction is our priority!</p>

                        <ul class="list-unstyled pl-md-5 mb-5">
                            <li class="d-flex text-black mb-2 contact-li">
                                <span class="mr-3"><span class="fas fa-map-marker-alt"></span></span> 34 Street Name,
                                City
                                Name Here,
                                <br> United States
                            </li>
                            <br>
                            <li class="d-flex text-black mb-2 contact-li"><span class="mr-3"><span
                                        class="fas fa-phone-alt"></span></span> +1
                                (222) 345 6789
                            </li>
                            <br>
                            <li class="d-flex text-black contact-li"><span class="mr-3"><span
                                        class="far fa-envelope"></span></span>
                                info@mywebsite.com
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <form class="mb-5" method="post" action="{{ route('contact.submit') }}" id="contactForm"
                              name="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="message" class="col-form-label">Message</label>
                                    <textarea class="form-control" name="message" id="message" cols="30"
                                              rows="7"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="submit-btn">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>

                        <div id="form-message-warning mt-4"></div>
                        <div id="form-message-success">
                            Your message was sent, thank you!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
