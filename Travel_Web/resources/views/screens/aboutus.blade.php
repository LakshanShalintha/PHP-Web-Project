@extends('layouts.newNavbar')
@section('content')

<!-- Recommend Section -->
<section class="recommend-section text-center py-5">
    <h2>Home Sweet Home</h2>
    <div class="btn-group" role="group" aria-label="Recommend Buttons">
        <button type="button" class="btn btn-dark">Accommodations</button>
        <button type="button" class="btn btn-light">Restaurants</button>
        <button type="button" class="btn btn-light">Reservations</button>
    </div>
</section>

<!-- Accommodations Section -->
<section class="accommodations-section text-center py-5">
    <h3>Accommodations</h3>
    <div class="container">
        <div class="row">
            <!-- Accommodation Cards -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Oak Ray Ella Gap Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Oak Ray Ella Gap Hotel</h5>
                        <p class="card-text">3500 Rs. / Per Night</p>
                        <p class="card-text"><small class="text-muted">Rating: 4.7</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Heritance Kandalama">
                    <div class="card-body">
                        <h5 class="card-title">Heritance Kandalama</h5>
                        <p class="card-text">4000 Rs. / Per Night</p>
                        <p class="card-text"><small class="text-muted">Rating: 4.7</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Cinnamon Citadel Kandy">
                    <div class="card-body">
                        <h5 class="card-title">Cinnamon Citadel Kandy</h5>
                        <p class="card-text">3500 Rs. / Per Night</p>
                        <p class="card-text"><small class="text-muted">Rating: 4.8</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular / Trending Section -->
<section class="trending-section text-center py-5">
    <h3>Popular / Trending</h3>
    <div class="container">
        <div class="row">
            <!-- Trending Cards -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Marino Beach Colombo">
                    <div class="card-body">
                        <h5 class="card-title">Marino Beach Colombo</h5>
                        <p class="card-text">12,000 Rs. / Per Night</p>
                        <p class="card-text"><small class="text-muted">Rating: 4.5</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Hikka Tranz by Cinnamon">
                    <div class="card-body">
                        <h5 class="card-title">Hikka Tranz by Cinnamon</h5>
                        <p class="card-text">12,000 Rs. / Per Night</p>
                        <p class="card-text"><small class="text-muted">Rating: 4.4</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Mount Lavinia Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Mount Lavinia Hotel</h5>
                        <p class="card-text">12,500 Rs. / Per Night</p>
                        <p class="card-text"><small class="text-muted">Rating: 4.4</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

