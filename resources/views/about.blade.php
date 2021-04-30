@extends('layouts.app')
@section('content')
    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>About</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-about align-self-stretch"
                        style="background-image: url(images/logo2.png); width: 100%;"></div>
                </div>
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4">Welcome to Donation Nation</h2>
                    <p>If you want your life to mean something, don't ask how much you have, ask how much you can give.The
                        best way to not feel hopeless is to get up and do something. Don’t wait for good things to happen
                        to you. If you go out and make some good things happen, you will fill the world with hope, you will
                        fill yourself with hope.</p>
                    <p>You have not lived today until you have done something for someone who can never repay you.</p>
                </div>
            </div>
        </div>
    </section>


@endsection
