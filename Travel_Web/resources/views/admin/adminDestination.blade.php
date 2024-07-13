@extends('layouts.adminNav')

@section('content')

    @foreach($destinations as $destination)
        <section class="destinations-section py-5">
            <div class="container">
                    <div class="carousel-inner">
                            <div class="row justify-content-center">
                                <div class="col-md-4 d-flex justify-content-center mb-4">
                                    <div class="card">
                                        <img src="{{ $destination->image}}" class="card-img-top" alt="{{$destination->title}}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$destination->title}}</h5>
                                            <p class="card-text">{{$destination->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        </section>
    @endforeach

@endsection
