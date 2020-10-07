@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
<link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
<!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="{{asset('css/new.css')}}">

		<!-- inner banner -->
		<div class="inner-banner text-center text-white">
                <ul class="w3_short">
                    <li>
                        <a href="/">Home</a>
                        <i>||</i>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
            <!-- //inner banner -->
        </header>
        <!-- //header -->

        <!-- about -->
        <div class="about-w3l py-sm-5 py-4">
            <div class="container py-xl-5 py-lg-3">
                <h3 class="title mb-lg-5 mb-sm-4 mb-3">
                    <span>A</span>bout
                    <span>U</span>s</h3>
                <div class="row">
                    <div class="col-xl-7 ab-left">
                        <img src="images/ab.jpg" alt=" " class="img-fluid" />
                    </div>
                    <div class="col-xl-5 ab-right">
                        <h3 class="mb-4 pb-4">Our team</h3>
                        <p>Thank you for taking the time to visit our site! Cross-border services is just not providing courier services across boundaries. It’s about making use of professional e-commerce.</p>
                        <p class="mt-3">We have a global capability with services operating in Europe, North Africa, Middle East, Asia Pacific and Americas.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //about -->



<!--ABOUT AREA-->
<section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>welcome to  United Speed Express!</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-left-content-area wow fadeIn">
                        <img src="img/about/about-cargo.png" alt="">
                        <p>Whatever the challenge, we’re on top of it. Decades of experience, innovative technology, and a team of 380,000 passionate experts allow us to provide the perfect logistics solution for your business needs. See some of our bespoke shipping solutions below.</p>

                    <p>USE transports everything, from oversized by cargo plane to small but life-saving by Parcelcopter</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>We have 30 years experience in this passion</h2>
                            <p>Today’s customers are always on the go and want their products faster and cheaper than ever before. Global interconnectedness is growing. That’s why you need a powerful, international network to manage your supply chain.

                                    With 380,000 people in over 220 countries and territories worldwide, we’re reaching more people than ever. And, as we’re already thinking about what the world in 2050 might look like, we’re preparing for the logistics challenges that lie ahead.

                                    Because we’re not only delivering packages. It’s our goal to bring joy and prosperity to the people we serve. Everywhere. Every day.</p>
                        </div>
                        <div class="about-count">
                            <div class="single-about-count">
                                <h4><i class="fa fa-suitcase"></i> 120,000</h4>
                                <p>Workers</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-thumbs-o-up"></i> 100,000</h4>
                                <p>Delivery Success</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-users"></i> 30,000</h4>
                                <p>Project Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->


        <!-- middle slider -->
        <div class="w3agile-spldishes py-sm-5 py-4">
            <div class="container  py-xl-3">
                <h3 class="title text-white text-center mb-lg-5 mb-sm-4 mb-3">
                    <span>V</span>ehicle
                    <span>F</span>leets</h3>
                <div class="spldishes-grids">
                    <div class="large-12 columns">
                        <!-- Owl-Carousel -->
                        <div id="owl-demo" class="owl-carousel owl-theme text-center agileinfo-gallery-row">
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/m1.jpg" title="Transports" alt="" />
                            </a>
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/m5.jpg" title="Transports" alt="" />
                            </a>
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/m3.jpg" title="Transports" alt="" />
                            </a>
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/m4.jpg" title="Transports" alt="" />
                            </a>
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/m2.jpg" title="Transports" alt="" />
                            </a>
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/m6.jpg" title="Transports" alt="" />
                            </a>
                        </div>
                        {{-- <a class="button secondary btn py-2 px-4 play">Play</a>
                        <a class="button secondary btn py-2 px-4 stop">Stop</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- //middle slider -->






        <!-- middle section -->
        <div class="middle-w3l py-sm-5 py-4">
            <div class="container py-xl-5 py-lg-3">
                <h2>reach your destination 100% sure and safe</h2>
                <p class="my-md-4 my-2">our wide range of express parcel and package services, along with shipping and tracking solutions to fit your needs..</p>
                <a href="contact.html" class="btn btn-secondary btn-lg button2-w3l mt-4" role="button" aria-pressed="true">Contact Us</a>
            </div>
        </div>
        <!-- //middle section -->
@endsection
