{{-- @extends('layouts.app')
@section('content')
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Donate</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">

                @foreach ($donate as $do)
                    <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="d-flex mb-4">
                                <a href="/donate/{{ $do->id }}">
                                    <div class="img" style="background-image: url('/storage/{{ $do->image }}')">
                                    </div>
                                </a>
                                <div class="info ml-4">
                                    <h3><a href="/donate/{{ $do->id }}">{{ $do->name }}</a></h3>
                                    <span class="position">{{ $do->created_at }}</span>
                                    <div class="text">
                                        <p>Donated <span>{{ $do->amount }}</span> for <a href="#">{{ $do->reason }}</a>
                                        </p>
                                    </div>
                                </div>
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
@endsection --}}


@extends('layouts.app')
@section('content')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Donate</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">

                @foreach ($donate as $do)
                    <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="d-flex mb-4">
                                <a href="/donate/{{ $do->id }}">
                                    <div class="img" style="background-image: url('/storage/{{ $do->image }}')">
                                    </div>
                                </a>
                                <div class="info ml-4">
                                    <h3><a href="/donate/{{ $do->id }}">{{ $do->name }}</a></h3>
                                    <span class="position">{{ $do->created_at }}</span>
                                    <div class="text">
                                        <p>Donated <span>{{ $do->amount }}</span> for <a href="#">{{ $do->reason }}</a>
                                        </p>
                                    </div>
                                </div>
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

    <style>
        .text-white {
            color: white;
        }

    </style>

    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 order-md-1">
                    <div class="">
                        <h2 style="color:white;font-weight: bold;">We only have what we give.</h2>
                    </div>
                    <h4 class="mb-5" style="color:white;">Please Fill Up Your Details Info</h4>
                    <form method=" POST" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="firstName" class="text-white">Full name</label>
                                <input type="text" name="customer_name" class="form-control" id="customer_name"
                                    placeholder="Your Name" required>
                                <div class="invalid-feedback">
                                    Valid customer name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="mobile" class="text-white">Mobile</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+88</span>
                                </div>
                                <input type="text" name="customer_mobile" class="form-control" id="mobile"
                                    placeholder="Mobile" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your Mobile number is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="text-white">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" name="customer_email" class="form-control" id="email"
                                placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="text-white">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Your Address" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2" class="text-white">Address 2 <span
                                    class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country" class="text-white">Country</label>
                                <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state" class="text-white">State</label>
                                <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option value="Dhaka">Dhaka</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip" class="text-white">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <input type="hidden" value="1200" name="amount" id="total_amount" required />
                            <label class="custom-control-label text-white" for="same-address">Shipping address is the same
                                as my
                                billing
                                address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label text-white" for="save-info">Save this information for next
                                time</label>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                            token="if you have any token validation"
                            postdata="your javascript arrays or objects which requires in backend"
                            order="If you already have the transaction generated for current order"
                            endpoint="{{ url('/pay-via-ajax') }}"> Donate Please
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
