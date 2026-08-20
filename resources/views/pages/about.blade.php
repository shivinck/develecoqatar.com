@extends('layouts.app')

@section('title', 'About Us — Develeco Trading and Contracting WLL')

@section('content')

    <section class="jarallax relative overflow-hidden z-1000 padding-top">
        <img src="{{ asset('images/background/architecture-8254661.jpg') }}" class="jarallax-img page-banner-zoom" alt="">
        <div class="sw-overlay op-2"></div>
        <div class="gradient-edge-start light w-40 start-40 op-9 z-2"></div>
        <div class="abs w-40 h-100 bg-white top-0 start-0 op-9 z-2"></div>
        <div class="container relative z-2">
            <div class="row wow fadeInRight">
                <div class="col-lg-10">
                    <h1 class="fs-sm-10vw mb-0">About Us</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="relative">
                        <div class="w-100 pe-5 pb-5 wow scaleIn">
                            <img src="{{ asset('images/assets/develeco-hp-1.png') }}" class="w-100 rounded-1" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps-lg-3">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">Company Profile</div>

                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            Single Source Solution <br> for All Your Needs
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Develeco is one of the smartest industries with single source solution that provides exemplary services to operate integrated business model comprising entire construction, interior design, joinery, MEP, transportation and facility management services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay=".7s">
                            The group has an extensive track record in large-scale projects across the region, with Develeco's expertise in building projects complementing expertise in construction and interior design projects. Our engineers have years of expertise across both the public and private sectors.
                        </p>

                        <a href="{{ route('contact') }}" class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s">
                            <span>Get In Touch</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="spacer-double"></div>

            <div class="row g-4">
                <div class="col-md-3 wow fadeInUp" data-wow-delay=".3s">
                    <div class="relative">
                        <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                            <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                        </span>
                        <div class="ps-90">
                            <h3 class="hs-4">Integrated Model</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="relative">
                        <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                            <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                        </span>
                        <div class="ps-90">
                            <h3 class="hs-4">Expert Engineers</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay=".5s">
                    <div class="relative">
                        <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                            <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                        </span>
                        <div class="ps-90">
                            <h3 class="hs-4">On-Time Delivery</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay=".6s">
                    <div class="relative">
                        <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                            <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                        </span>
                        <div class="ps-90">
                            <h3 class="hs-4">Safety First</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-color-op-1">
        <div class="container">
            <div class="row g-4 gx-5">
                <div class="col-lg-6 wow fadeInUp">
                    <div class="subtitle id-color">Our Philosophy</div>
                    <h2>Everything Starts with Strategy</h2>
                    <p>For us, it's imperative to understand the why before we do the what. We also operate a diverse range of complementary Associated Businesses that enable us to offer clients a one-stop solution for all their design, construction, joinery, transportation, material supply and facility management needs.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="subtitle id-color">Our Strength</div>
                    <h2>Associated Businesses</h2>
                    <p>Our complementary businesses enable us to serve clients across the full project lifecycle — from initial material supply and heavy equipment rental through to final interior finishing and ongoing facility management.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4 justify-content-center mb-4">
                <div class="col-lg-6 text-center">
                    <div class="subtitle wow fadeInUp">Our Values</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">What Drives Us</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="relative">
                        <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                            <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                        </span>
                        <div class="ps-90">
                            <h3 class="hs-4">Quality</h3>
                            <p class="mb-0">International standards on every project we deliver across the region.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="relative">
                        <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                            <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                        </span>
                        <div class="ps-90">
                            <h3 class="hs-4">Integrity</h3>
                            <p class="mb-0">Transparent and ethical business practices at all levels.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                    <div class="relative">
                        <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                            <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                        </span>
                        <div class="ps-90">
                            <h3 class="hs-4">Reliability</h3>
                            <p class="mb-0">Delivering on time, every time, without compromising quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".8s">
                    <div class="relative">
                        <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                            <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                        </span>
                        <div class="ps-90">
                            <h3 class="hs-4">Strategy</h3>
                            <p class="mb-0">Understanding the why before the what — every project starts with strategy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
