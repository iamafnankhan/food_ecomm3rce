@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div id="page-content" class="page-content" style="margin-top: -25px; position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden;">
    <div class="banner">
            <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
                <video width="100%" preload="auto" loop autoplay muted>
                    <source src='assests/media/explore.mp4' type='video/mp4' />
                    <source src='assests/media/explore.webm' type='video/webm' />
                </video>

                <div class="container">
                    <h1 class="pt-5 text-white">
                        Save time and leave the<br>
                        groceries to us.
                    </h1>
                    <p class="lead text-white">
                        Always Fresh Everyday.
                    </p>

                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-shopping-basket"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Buy
                                    </h4>
                                    <p class="card-text">
                                        Simply click-to-buy on the product you want and submit your order when you're
                                        done.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Harvest
                                    </h4>
                                    <p class="card-text">
                                        Our team ensures the produce quality is up to our standard and delivers to your
                                        door within 24 hours of harvest day.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Delivery
                                    </h4>
                                    <p class="card-text">
                                        Farmers receive your orders two days in advance so they can prepare for harvest
                                        exactly as your orders—no wasted.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    
@endsection
 