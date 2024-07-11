@extends('layouts.adminNav')

@section('content')
    <section class="accommodations-section py-5">
        <h3 class="text-center">Accommodations</h3>
        <div class="container">
            <div class="row justify-content-center">
                @foreach($accommodations as $acc)
                    <div class="col-md-4 d-flex justify-content-center mb-4">
                        <div class="card accommodation-card">
                            <img src="{{ asset('image/' . $acc->image) }}" class="card-img-top"
                                 alt="{{ $acc->name }}">
                            <div class="rating-badge">
                                <span class="badge badge-dark"><i class="fas fa-star"></i> 4.7 (283)</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $acc->name }}</h5>
                                <h5 class="card-title">{{ $acc->price }}</h5>
                                <p class="card-price">3500 Rs. / Per Night</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
