@extends('layouts.app')
@section('content')

    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4 text-uppercase">No one has ever become poor by giving</h1>
                    <p class="mb-5">Created by <a href="{{ url('/') }}">UDRIEV</a></p>

                    <p><a href="{{ url('/contact') }}"
                            class="btn btn-white btn-outline-black px-4 py-3 font-weight-bold">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch bg-dark text-white">
                        <div class="text">
                            <h3 class="mb-4 text-white">Donate Money</h3>
                            <p>Good works is giving to the poor and the helpless</p>
                            <p><a href="{{ url('/donate') }}" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
                        </div>


                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate ">
                    <div class="block-18 color-3 align-items-stretch">
                        <div class="text">

                            <h3 class="mb-4">Be a Volunteer</h3>

                            <p>One of the most important things you can do on this earth is to let people know they are not
                                alone</p>
                            <p><a href="#volunteer" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Causes</h2>
                    <p>The Bangladesh government has identified as major hazards floods, cyclones, droughts, tidal surges,
                        tornadoes, earthquakes, river erosion, water logging, rising water and soil salinity</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">

                        @foreach ($causes as $cause)
                            <div class="item">
                                <div class="cause-entry">
                                    <a href="/cause/{{ $cause->id }}" class="img"
                                        style="background-image: url('/storage/{{ $cause->image }}');"></a>
                                    <div class="text p-3 p-md-4">
                                        <h3><a href="/cause/{{ $cause->id }}">{{ $cause->caption }}</a></h3>
                                        <p>{{ $cause->description }}</p>
                                        <span class="donation-time mb-3 d-block">{{ $cause->created_at }}</span>
                                        <div class="progress custom-progress-success">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                                aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Recent Blogs</h2>
                    <p>Every year more than two million people are being added to our population. The population of
                        Bangladesh is increasing at an alarming rate</p>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($posts as $post)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="/post/{{ $post->id }}" class="block-20"
                                style="background-image: url('/storage/{{ $post->image }}');">
                            </a>
                            <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div><a href="#">{{ $post->created_at }}</a></div>
                                    <div><a href="#">Admin</a></div>
                                </div>
                                <h3 class="heading mt-3"><a href="/post/{{ $post->id }}">{{ $post->caption }}</a>
                                </h3>
                                <p>{{ $post->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Latest Events</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="/event/{{ $event->id }}" class="block-20"
                                style="background-image: url('/storage/{{ $event->eventImage }}');">
                            </a>
                            <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div><a href="/event/{{ $event->id }}">{{ $event->created_at }}</a></div>
                                    <div><a href="/event/{{ $event->id }}">Admin</a></div>
                                </div>
                                <h3 class="heading mb-4"><a href="/event/{{ $event->id }}">{{ $event->title }}</a>
                                </h3>
                                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>
                                        {{ $event->eventTime }}</span>

                                </p>

                                <div class="time-loc">
                                    <span><i class="icon-map-o"></i> {{ $event->eventLocation }}</span>
                                </div>

                                <div class="mt-2">
                                    <p>{{ $event->eventDescription }}</p>
                                </div>
                                <p><a href="{{ url('/contact') }}">Join Event <i class="ion-ios-arrow-forward"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);" id="volunteer">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_3.jpg);"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Be a volunteer</h3>
                    <form action="/volunteerRequest" method="post" class="volunter-form">
                        @csrf
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Your Name">

                            @error('name')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Your Email">

                            @error('email')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="3" class="form-control"
                                placeholder="Message"></textarea>

                            @error('message')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
