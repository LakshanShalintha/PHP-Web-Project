@extends('layouts.navbar')
@section('content')
    <div >
        <img class="d-block w-100" src="{{ asset('images/image 2.png') }}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Home Sweet Home</h5>
            <p>Recommend</p>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center ">
        <div class="centered-text">
            <p>Recommend</p>
            <h5>Home Sweet Home</h5>
        </div>
    </div>

    @foreach($accommodations as $acc)
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('image/' . $acc->image) }}" class="card-img-top" alt="{{ $acc->name }}">
                        <div class="card-img-overlay">
                            <h1 class="card-title text-right mt-4">{{$acc->name}}</h1>
                            <h5 class="card-text text-right location-text mt-4">{{$acc->location}}</h5>
                            <h3 class="card-text text-right mt-4">{{$acc->price}} Rs./per night</h3>
                            <a href="#" class="btn btn-primary btn-bottom">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
