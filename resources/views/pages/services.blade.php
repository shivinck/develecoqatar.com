@extends('layouts.app')

@section('title', 'Our Services — Develeco Trading and Contracting WLL')

@section('content')

    <section class="jarallax relative overflow-hidden z-1000">
        <img src="{{ asset('images/background/architecture-8254661.jpg') }}" class="jarallax-img page-banner-zoom" alt="">
        <div class="sw-overlay op-2"></div>
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
                <!-- Transport & Material Supply -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".0s">
                        <img src="{{ asset('images/services/architecture-8254661.jpg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Crusher material, dune sand, wash sand, rock filling materials, gabro — reliable supply chain.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/1.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Transport &amp; Material Supply</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- Heavy Equipment Rental -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".3s">
                        <img src="{{ asset('images/services/2.webp') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Excavator, shovel, backhoe loader, skid loader, all types of crane — available for hire.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/2.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Heavy Equipment Rental</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- Maintenance & Construction -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".6s">
                        <img src="{{ asset('images/services/3.webp') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Excavation, kerbstone, interlock, asphalting, block work, plastering, shuttering, steel fixing, concreting.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/3.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Maintenance &amp; Construction</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- Interior Design -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".9s">
                        <img src="{{ asset('images/services/architecture-8254661.jpg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Carpentry, painting, gypsum, wallpaper, lighting, cladding — complete interior transformations.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/1.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Interior Design</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>

                <!-- MEP Works -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay="1.2s">
                        <img src="{{ asset('images/services/2.webp') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Mechanical, electrical &amp; plumbing works — HVAC, electrical panels, plumbing &amp; drainage systems.</div>
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

                <!-- Facility Management -->
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay="1.5s">
                        <img src="{{ asset('images/services/3.webp') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Comprehensive facility management services for commercial and industrial properties.</div>
                            <a class="btn-line" href="{{ route('quote') }}">Get a Quote</a>
                        </div>
                        <img src="{{ asset('images/icons-white/3.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Facility Management</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
