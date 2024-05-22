@extends('layouts.adminNav')

@section('content')
    <div class="row">
        @foreach($accommodations as $acc)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/' . $acc->image) }}" class="card-img-top" alt="{{ $acc->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $acc->name }}</h5>
                        <h5 class="card-title">{{ $acc->price }}</h5>
                        <form action="{{ route('accommodations.destroy', $acc->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this accommodation?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
