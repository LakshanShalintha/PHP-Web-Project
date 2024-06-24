<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travlo - Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/aboutus.css') }}" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html"><img src="logo.png" alt="Travlo Logo" height="40"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="destination.html">Destination</a></li>
            <li class="nav-item"><a class="nav-link" href="accommodations.html">Accommodations</a></li>
            <li class="nav-item"><a class="nav-link" href="festival.html">Festival</a></li>
            <li class="nav-item"><a class="nav-link" href="documentaries.html">Documentaries</a></li>
        </ul>
    </div>
</nav>

<!-- Login Section -->
<section class="login-section d-flex justify-content-center align-items-center">
    <div class="login-box">
        <h2 class="text-center mb-4">Login</h2>
        <form>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <div class="text-center mt-3">
                <a href="#">Forgot password?</a>
            </div>
            <div class="text-center mt-3">
                <p>Don't have an account? <a href="register.html">Register</a></p>
            </div>
        </form>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="scripts.js"></script>
</body>
</html>
