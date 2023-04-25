@extends('layouts.default')

@section('content')
    <h2>Example vehicles</h2>

    <p>
        <a href="{{url('vehicles/207677')}}">Cooper Cooper-Bristol </a>
    </p>
    <p>
        <a href="{{url('vehicles/330180')}}">Rover Mini 1.3i</a>
    </p>
    <p>
        <a href="{{url('vehicles/212141')}}">BMW Z4 M Coupé</a>
    </p>
@endsection
