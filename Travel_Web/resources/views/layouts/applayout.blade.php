<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travlo - Home Sweet Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/festival.css') }}" rel="stylesheet">
    <link href="{{ asset('css/destination.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plan.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>

<main>
    @yield('content')
</main>

<!-- Subscription Section -->
<section class="subscription-section text-center py-5">
    <div class="overlay">
        <div class="container">
            <h2>Subscribe and be Update</h2>
            <form class="form-inline justify-content-center">
                <div class="form-group mb-2">
                    <input type="email" class="form-control" id="email"
                           placeholder="Please enter your email address to get latest updates and offers">
                </div>
                <button type="submit" class="btn btn-dark mb-2">Subscribe</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-description">
                <p>Discover the wonders of Sri Lanka – where breathtaking landscapes, vibrant culture, and warm
                    hospitality await. Explore pristine beaches, ancient ruins, and lush jungles, all in one island
                    paradise. Start your unforgettable journey with us today.</p>
            </div>
            <div class="col-md-2 footer-links">
                <h5>Home</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Accommodations</a></li>
                    <li><a href="#">Festival</a></li>
                    <li><a href="#">Documentaries</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-contact">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Testimony</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-social">
                <h5>Follow Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#"> <i class="fab fa-instagram fa-2x"></i></a></li>
                    <li><a href="#"> <i class="fab fa-facebook fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
