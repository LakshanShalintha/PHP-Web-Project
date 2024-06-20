<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travlo - Home Sweet Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/newNavbar.css') }}" rel="stylesheet">
</head>
<body>
<!-- Header Section -->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">TRAVLO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/accommodations')}}">Accommodations</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
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
    <div class="header-content text-center">
        <h1>Home Sweet Home</h1>
        <p>Recommend</p>
    </div>
</header>

<main>
    @yield('content')
</main>

<!-- Subscription Section -->
<section class="subscription-section text-center py-5">
    <div class="container">
        <h2>Subscribe and be Update</h2>
        <form class="form-inline justify-content-center">
            <div class="form-group mb-2">
                <input type="email" class="form-control" id="email" placeholder="Please enter your email address to get latest updates and offers">
            </div>
            <button type="submit" class="btn btn-dark mb-2">Subscribe</button>
        </form>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer text-center py-4">
    <div class="container">
        <p class="footer-description">Discover the wonders of Sri Lanka – where breathtaking landscapes, vibrant
            culture, and warm hospitality await. Explore pristine beaches, ancient ruins, and lush jungles, all in one
            island paradise. Start your unforgettable journey with us today.</p>
        <ul class="footer-links list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Destination</a></li>
            <li class="list-inline-item"><a href="#">Accommodations</a></li>
            <li class="list-inline-item"><a href="#">Festival</a></li>
            <li class="list-inline-item"><a href="#">Documentaries</a></li>
        </ul>
        <ul class="footer-contact list-inline">
            <li class="list-inline-item"><a href="#">Help Center</a></li>
            <li class="list-inline-item"><a href="#">Testimony</a></li>
            <li class="list-inline-item"><a href="#">Contact</a></li>
        </ul>
        <ul class="footer-social list-inline">
            <li class="list-inline-item"><a href="#"><img src="https://via.placeholder.com/20x20" alt="Instagram"></a>
            </li>
            <li class="list-inline-item"><a href="#"><img src="https://via.placeholder.com/20x20" alt="Facebook"></a>
            </li>
        </ul>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
