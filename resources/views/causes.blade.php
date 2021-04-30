@extends('layouts.app')
@section('content')
    <div class="hero-wrap" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Causes</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Causes</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @foreach ($causes as $cause)
                    <div class="col-md-4 ftco-animate">
                        <div class="cause-entry">
                            <a href="/cause/{{ $cause->id }}" class="img"
                                style="background-image: url('/storage/{{ $cause->image }}'); width:300px"></a>
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
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
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
