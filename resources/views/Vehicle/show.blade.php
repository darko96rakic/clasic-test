@extends('layouts.default')

@section('content')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="row col-md-12">
                <div class="col-md-9">
                    <h3>
                        <b>{{$vehicle->yearOfProduction}} | {{$vehicle->car->make}} {{$vehicle->car->specification}}  </b>
                    </h3>
                    <p>{{ $vehicle->titleShort->{$vehicle->locale} }}</p>

                    <div class="col-md-12">
                        <div class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner ">
                                @foreach($vehicle->standardImages as $image)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <div class="slider-image text-center">
                                            <img width="100%" src="{{  $image->url }}" class="d-inline-block border text-center rounded" alt="Image">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 align-self-center d-flex justify-content-end">
                    <div class="" id="contact">
                        <p>{{$vehicle->contact->firstName}} {{$vehicle->contact->lastName}}</p>
                        <p>Phone: {{$vehicle->contact->phone}}</p>
                        <p>Published: {{$vehicle->datePublished}}</p>
                    </div>
                </div>
                </div>
                <div id="vehicle-details" class="row mt-4">
                    <h4>Vehicle Details</h4>
                    <hr>
                    <div class="col-md-6">
                        <h5>Vehicle data</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Make</th>
                                    <td>{{$vehicle->car->make}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Model</th>
                                    <td>{{$vehicle->car->model}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Model Name</th>
                                    <td>{{$vehicle->car->specification}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h5>Technical details</h5>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">Power(kW/hp)</th>
                                <td>{{$vehicle->horsepower}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Cylinders</th>
                                <td>{{$vehicle->cylinder}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Cubic capacity (ccm)</th>
                                <td>{{$vehicle->cubicCapacity}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
