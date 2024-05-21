@extends('layouts.adminNav')

@section('content')

    @foreach($accommodations as $acc)
        <ul>{{$acc->name}}</ul>
            {{$acc->image}}
    @endforeach
@endsection
