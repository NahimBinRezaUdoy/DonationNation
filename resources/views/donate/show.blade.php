@extends('layouts.app')
@section('content')

    <div class="hero-wrap" style="background-image: url('/storage/{{ $donate->image }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="{{ url('/home') }}">Home</a></span> <span class="mr-2"><a
                                href="{{ url('/donate') }}">Donate</a></span> <span>Donate Details</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donate Details
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">

                    <h2 class="mb-3 font-weight-bold text-uppercase text-center">Donate Details</h2>

                    <div class="about-author d-flex p-5 bg-light  ">
                        <div class="bio align-self-md-center mr-5 col-md-4">
                            <img src="/storage/{{ $donate->image }}" alt="Image placeholder" class="img-fluid mb-4 "
                                style="width: 300px">
                        </div>
                        <div class="desc align-self-md-center col-md-6">
                            <div class="text">
                                <p>Donated Amount : <span
                                        class="font-weight-bold text-success">{{ $donate->amount }}</span> </p>
                                <p>Donated Reason : <span
                                        class="font-weight-bold text-success">{{ $donate->reason }}</span> </p>
                            </div>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">

                    <div class="sidebar-box ftco-animate">

                        <h2 class="mb-4">Recent Donates</h2>

                        @foreach ($donates as $donate)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" href="/donate/{{ $donate->id }}"
                                    style="background-image: url('/storage/{{ $donate->image }}');"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="/donate/{{ $donate->id }}">{{ $donate->name }}</a>
                                    </h3>
                                    <div><a href="/donate/{{ $donate->id }}"><i class="fa fa-usd"
                                                aria-hidden="true"></i></span>
                                            {{ $donate->amount }}</a></div>
                                    <div class="meta">
                                        <div><a href="/donate/{{ $donate->id }}"><span class="icon-calendar"></span>
                                                {{ $donate->created_at }}</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>

            </div>
        </div>
    </section> <!-- .section -->
@endsection
