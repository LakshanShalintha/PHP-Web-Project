@extends('layouts.adminNav')

@section('content')

@foreach($destinations as $destination)
    {{$destination->title}}
@endforeach

@endsection
