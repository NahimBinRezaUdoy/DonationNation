@extends('layouts.app')
@section('content')

    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a
                                href="blog.html">Blog</a></span> <span>Blog Details</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog Details</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">I don't want to live</h2>
                    <p>I don't want to live in the kind of world where we don't look out for each other. Not just the people
                        that are close to us, but anybody who needs a helping hand. I cant change the way anybody else
                        thinks, or what they choose to do, but I can do my bit.</p>
                    <p>
                        <img src="images/image_7.jpg" alt="" class="img-fluid">
                    </p>




                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/recent1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading">One of the most important thing</h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/recent2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading">When you have wit of your own</h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->
@endsection
