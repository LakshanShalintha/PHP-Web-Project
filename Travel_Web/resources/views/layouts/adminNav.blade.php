<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--EXTERNAL CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <link href="{{ asset('css/admin_css/admin_layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_css/addAccommodations.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_css/adminAccommodations.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_css/adminDestination.css') }}" rel="stylesheet">
    <link href="{{asset('css/festival.css')}}" rel="stylesheet">


    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

</head>
<body>

<header class="header">
    <div class="overlay">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">TRAVLO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/adminDestination')}}">Destination</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/addDestination') }}">Add Destination</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/adminAccommodationsView')}}">Accommodations</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/addAccommodations')}}">Add Accommodations</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/adminFestival')}}">Festival</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/addFestivals')}}">Add Festival</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/adminDocumentaries')}}">Documentaries</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/addDocumentaries')}}">Add Documentaries</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/addPlan')}}">Add Plan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/adminPlan')}}">Plan</a></li>
                    {{--<li class="nav-item"><a class="nav-link" href="{{ url('/aboutUs') }}">About</a></li>--}}

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
        <main>
            @yield('content')
        </main>
    </div>
</header>

<script>
    // Update the file input label with the selected file name
    $('#image').on('change', function () {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>

<!-- Include Bootstrap JS and Popper.js for Bootstrap 4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
