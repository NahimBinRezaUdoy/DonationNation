@extends('layouts.app')
@section('content')

    <div class="hero-wrap" style="background-image: url('/storage/{{ $event->eventImage }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="{{ url('/home') }}">Home</a></span> <span class="mr-2"><a
                                href="{{ url('/blog') }}">Event</a></span> <span>Event Details</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Event Details
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">

                    <h2 class="mb-3 font-weight-bold text-uppercase text-center">{{ $event->title }}</h2>

                    <div class="about-author d-flex p-5 bg-light">
                        <div class="bio align-self-md-center mr-5" style="width: 300px">
                            <img src="/storage/{{ $event->eventImage }}" alt="Image placeholder" class="img-fluid mb-4">
                        </div>
                        <div class="desc align-self-md-center">
                            <h3 class="mb-4">{{ $event->title }}</h3>
                            <p>{{ $event->eventDescription }}</p>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">

                    <div class="sidebar-box ftco-animate">

                        <h2 class="mb-4">Recent Events</h2>

                        @foreach ($events as $event)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" href="/event/{{ $event->id }}"
                                    style="background-image: url('/storage/{{ $event->eventImage }}');"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="/event/{{ $event->id }}">{{ $event->title }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="/event/{{ $event->id }}"><span class="icon-calendar"></span>
                                                {{ $event->eventTime }}</a>
                                        </div>
                                        <div>
                                            <a href="/event/{{ $event->id }}">{{ $event->eventLocation }}</a>
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
