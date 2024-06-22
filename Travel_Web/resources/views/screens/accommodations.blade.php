@extends('layouts.newNavbar')
@section('content')

    <!-- Recommend Section -->
    <section class="recommend-section text-center py-5">
        <div class="container">
            <h2>Home Sweet Home</h2>
            <div class="btn-group mt-4" role="group" aria-label="Basic example">
                <button type="button" class="btn custom-btn active">Accommodations</button>
                <button type="button" class="btn custom-btn" onclick="window.location='{{ route('restaurants') }}'">Restaurants</button>
                <button type="button" class="btn custom-btn">Reservations</button>
            </div>
        </div>
    </section>

    <!-- Accommodations Section -->
    <section class="accommodations-section py-5">
        <h3 class="text-center">Accommodations</h3>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Accommodation Cards -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card accommodation-card">
                        <img src="{{ asset('images/cardAccommodation.png') }}" class="card-img-top" alt="Oak Ray Ella Gap Hotel">
                        <div class="rating-badge">
                            <span class="badge badge-dark"><i class="fas fa-star"></i> 4.7 (283)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Oak Ray Ella Gap Hotel</h5>
                            <p class="card-text">Passara Road, Ella</p>
                            <p class="card-price">3500 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card accommodation-card">
                        <img src="{{ asset('images/cardAccommodation.png') }}" class="card-img-top" alt="Oak Ray Ella Gap Hotel">
                        <div class="rating-badge">
                            <span class="badge badge-dark"><i class="fas fa-star"></i> 4.7 (283)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Oak Ray Ella Gap Hotel</h5>
                            <p class="card-text">Passara Road, Ella</p>
                            <p class="card-price">3500 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card accommodation-card">
                        <img src="{{ asset('images/cardAccommodation.png') }}" class="card-img-top" alt="Oak Ray Ella Gap Hotel">
                        <div class="rating-badge">
                            <span class="badge badge-dark"><i class="fas fa-star"></i> 4.7 (283)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Oak Ray Ella Gap Hotel</h5>
                            <p class="card-text">Passara Road, Ella</p>
                            <p class="card-price">3500 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Popular / Trending Section -->
    <section class="trending-section py-5">
        <h3 class="text-center">Popular / Trending</h3>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Trending Cards -->
                <div class="col-md-12 d-flex justify-content-center mb-4">
                    <div class="card trending-card">
                        <img src="{{ asset('images/cardTrending.png') }}" alt="Marino Beach Colombo">
                        <div class="overlay"></div>
                        <div class="rating-badge">
                            <span class="badge"><i class="fas fa-star"></i> 4.5 (123)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marino Beach Colombo</h5>
                            <p class="card-text">Colombo</p>
                            <p class="card-price">12,000 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center mb-4">
                    <div class="card trending-card">
                        <img src="{{ asset('images/cardTrending.png') }}" alt="Marino Beach Colombo">
                        <div class="overlay"></div>
                        <div class="rating-badge">
                            <span class="badge "><i class="fas fa-star"></i> 4.5 (123)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marino Beach Colombo</h5>
                            <p class="card-text">Colombo</p>
                            <p class="card-price">12,000 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center mb-4">
                    <div class="card trending-card">
                        <img src="{{ asset('images/cardTrending.png') }}" alt="Marino Beach Colombo">
                        <div class="overlay"></div>
                        <div class="rating-badge">
                            <span class="badge "><i class="fas fa-star"></i> 4.5 (123)</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marino Beach Colombo</h5>
                            <p class="card-text">Colombo</p>
                            <p class="card-price">12,000 Rs. / Per Night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

