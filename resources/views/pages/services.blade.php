@extends('layouts.app')

@section('title', 'Our Services — Develeco Trading and Contracting WLL')

@section('content')

    <section class="jarallax relative overflow-hidden z-1000 padding-top">
        <img src="{{ asset('images/background/architecture-8254661.jpg') }}" class="jarallax-img page-banner-zoom" alt="">
        <div class="sw-overlay op-5"></div>
         <div class="gradient-edge-start light w-40 start-40 op-9 z-2"></div>
        <div class="abs w-40 h-100 bg-white top-0 start-0 op-9 z-2"></div>
        <div class="container relative z-2">
            <div class="row wow fadeInRight">
                <div class="col-lg-10">
                    <h1 class="fs-sm-10vw mb-0">Our Services</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4">
                <!-- Steel Structures -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".0s">
                        <img src="{{ asset('images/assets/services1.jpeg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Structural steel frames, mezzanine floors, canopies, sheds, and industrial platforms built to international standards.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/1.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Steel Structures</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- Civil Contracting -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".3s">
                        <img src="{{ asset('images/assets/services2.jpeg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Excavation, kerbstone, interlock, asphalting, block work, plastering, shuttering, concreting and finishing works.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/2.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Civil Contracting</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- Glass & Aluminium -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".6s">
                        <img src="{{ asset('images/assets/services3.jpeg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Custom glass &amp; aluminium fabrication for facades, partitions, curtain walls and architectural elements.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/3.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Glass &amp; Aluminium</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- Video Wall -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".9s">
                        <img src="{{ asset('images/assets/services4.jpeg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Professional video wall installation, LED displays, digital signage and AV solutions for commercial spaces.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/1.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Video Wall</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- MEP Works -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay="1.2s">
                        <img src="{{ asset('images/assets/services5.jpeg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Mechanical, electrical &amp; plumbing works — HVAC, electrical panels, wiring, plumbing &amp; drainage systems.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/2.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">MEP Works</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- Interior & Fitout -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay="1.5s">
                        <img src="{{ asset('images/assets/services6.jpeg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Painting, gypsum, wallpaper, lighting, cladding — complete interior &amp; fitout solutions.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/3.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Interior &amp; Fitout</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
