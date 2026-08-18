@extends('layouts.app')

@section('title', 'Develeco Trading and Contracting WLL')
@section('header_class', 'transparent')

@section('content')

    <section id="section-intro" class="no-top no-bottom relative overflow-hidden z-1000">
        <div class="mh-800 relative">
            <div class="sw-overlay op-2"></div>
            <div class="gradient-edge-start light w-40 start-40 op-9 z-2"></div>
            <div class="abs w-40 h-100 bg-white top-0 start-0 op-9 z-2"></div>

            <div class="abs abs-middle z-2 w-100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10">
                            <h1 class="fs-sm-10vw mb-0 wow fadeInRight">
                                <span id="typed-text"></span><span class="typed-cursor">|</span>
                            </h1>

                            <h1 class="fs-sm-10vw mb-4 id-color wow fadeInRight" data-wow-delay=".3s">
                                Single Source Solution
                            </h1>

                            <div class="col-lg-6">
                                <p class="mb-4 wow fadeInRight" data-wow-delay=".6s">
                                    Construction, interior design, joinery, MEP, transportation and facility management — we provide exemplary services through an integrated business model.
                                </p>

                                <a href="{{ route('quote') }}" class="btn-main fx-slide wow fadeInRight" data-wow-delay=".9s">
                                    <span>Get a Free Quote</span>
                                </a>
                            </div>
                        </div>

                        <div class="spacer-double xs-hide d-none"></div>

                        <div class="col-lg-12 xs-hide d-none">
                            <div class="bg-blur light p-40 rounded-1">
                                <div class="row g-4 text-center">

                                    <div class="col-md-3 col-sm-6">
                                        <div class="de_count wow fadeInUp" data-wow-delay=".0s">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-building fs-40 id-color me-3"></i>
                                                <div class="text-start">
                                                    <h2 class="fs-32 mb-1 lh-1">50+</h2>
                                                    <span>Projects Completed</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="de_count wow fadeInUp" data-wow-delay=".1s">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-calendar-check fs-40 id-color me-3"></i>
                                                <div class="text-start">
                                                    <h2 class="fs-32 mb-1 lh-1">10+</h2>
                                                    <span>Years Experience</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="de_count wow fadeInUp" data-wow-delay=".2s">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-truck fs-40 id-color me-3"></i>
                                                <div class="text-start">
                                                    <h2 class="fs-32 mb-1 lh-1">20+</h2>
                                                    <span>Major Clients</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="de_count wow fadeInUp" data-wow-delay=".3s">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-shield-halved fs-40 id-color me-3"></i>
                                                <div class="text-start">
                                                    <h2 class="fs-32 mb-1 lh-1">100%</h2>
                                                    <span>Safety Record</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="swiper hero-swiper" data-0="transform: scale(1);" data-800="transform: scale(1.5);">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-inner" data-bgimage="url({{ asset('images/background/banner.jpeg') }})">
                            <div class="sw-overlay op-3"></div>
                            <div class="gradient-edge-start w-50 op-7"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-inner" data-bgimage="url({{ asset('images/background/banner2.jpg') }})">
                            <div class="sw-overlay op-3"></div>
                            <div class="gradient-edge-start w-50 op-7"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0" aria-label="section">
        <div class="bg-color-op-8 text-light d-flex py-3 lh-1">
            <div class="de-marquee-list-1">
                <div class="hs-2 d-inline-block mb-0 fs-48 mx-4">Construction</div>
                <div class="hs-2 d-inline-block mb-0 fs-48 mx-4 op-5">Interior Design</div>
                <div class="hs-2 d-inline-block mb-0 fs-48 mx-4">MEP Works</div>
                <div class="hs-2 d-inline-block mb-0 fs-48 mx-4 op-5">Joinery</div>
                <div class="hs-2 d-inline-block mb-0 fs-48 mx-4">Transportation</div>
                <div class="hs-2 d-inline-block mb-0 fs-48 mx-4 op-5">Material Supply</div>
                <div class="hs-2 d-inline-block mb-0 fs-48 mx-4">Heavy Equipment</div>
                <div class="hs-2 d-inline-block mb-0 fs-48 mx-4 op-5">Facility Management</div>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="relative">
                        <div class="w-100 pe-5 pb-5 wow scaleIn">
                            <img src="{{ asset('images/misc/hp-architecture-8254661_1281.jpg') }}" class="w-100 rounded-1" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps-lg-3">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                            About Develeco
                        </div>

                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            Integrated Expertise <br> Under One Roof
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Develeco is one of the smartest industries with single source solution that provides exemplary services to operate integrated business model comprising entire construction, interior design, joinery, MEP, transportation and facility management services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay=".7s">
                            We also operate a diverse range of complementary Associated Businesses that enable us to offer clients a one-stop solution for all their design, construction, joinery, transportation, material supply and facility management needs.
                        </p>

                        <a href="{{ route('about') }}" class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s">
                            <span>Learn More About Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4 gx-5">
                <div class="col-lg-4">
                    <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Why Develeco</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Why Choose Us?</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        The group has an extensive track record in large-scale projects across the region, with our engineers having years of expertise across both the public and private sectors.
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="relative">
                                <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                                    <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                                </span>
                                <div class="ps-90">
                                    <h3 class="hs-4">Integrated Business Model</h3>
                                    <p class="mb-0">Single source solution covering construction, MEP, interior, joinery, transport and facility management.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="relative">
                                <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                                    <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                                </span>
                                <div class="ps-90">
                                    <h3 class="hs-4">Experienced Engineers</h3>
                                    <p class="mb-0">Years of expertise across both public and private sectors on large-scale regional projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="relative">
                                <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                                    <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                                </span>
                                <div class="ps-90">
                                    <h3 class="hs-4">One-Stop Solution</h3>
                                    <p class="mb-0">From material supply to facility management — everything under one roof for complete project delivery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="relative">
                                <span class="abs w-70px p-3 circle bg-color-op-2 d-block">
                                    <img src="{{ asset('images/icons-color/check.png') }}" class="w-100" alt="">
                                </span>
                                <div class="ps-90">
                                    <h3 class="hs-4">Extensive Track Record</h3>
                                    <p class="mb-0">Proven delivery on major projects including Orbital Highway, Al Bida Park, and industrial factories.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="container">
            <div class="row g-4 justify-content-center mb-2">
                <div class="col-lg-6">
                    <div class="text-center">
                        <div class="subtitle wow fadeInUp">What We Do</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".0s">
                        <img src="{{ asset('images/services/architecture-8254661.jpg') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Excavation, kerbstone, interlock, asphalting, block work, plastering, shuttering, steel fixing, concreting, tile, marble &amp; granite works.</div>
                            <a class="btn-line" href="{{ route('services') }}">View Details</a>
                        </div>
                        <img src="{{ asset('images/icons-white/1.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Maintenance &amp; Construction</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".3s">
                        <img src="{{ asset('images/services/2.webp') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Crusher material, dune sand, wash sand, rock filling materials, gabro — reliable supply for all project needs.</div>
                            <a class="btn-line" href="{{ route('services') }}">View Details</a>
                        </div>
                        <img src="{{ asset('images/icons-white/2.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Transport &amp; Material Supply</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".6s">
                        <img src="{{ asset('images/services/3.webp') }}" class="hover-scale-1-1 w-100" alt="">
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <div class="mb-3">Carpentry, painting, gypsum, wallpaper, lighting, cladding — complete interior solutions for any space.</div>
                            <a class="btn-line" href="{{ route('services') }}">View Details</a>
                        </div>
                        <img src="{{ asset('images/icons-white/3.png') }}" class="abs abs-centered w-20 z-2" alt="">
                        <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                            <h3 class="hs-4 mb-3">Interior Design</h3>
                        </div>
                        <div class="gradient-edge-bottom color abs w-100 h-70 bottom-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container relative z-2">
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-md-3 de-step de-step-arrow wow fadeInRight" data-wow-delay=".3s">
                    <div class="de-step-icon bg-color-op-2">
                        <i class="id-color fas fa-comments fa-2x wow rotateIn" data-wow-delay=".6s"></i>
                    </div>
                    <h3 class="hs-4">Consultation</h3>
                    <p>We understand the why before we do the what — every project starts with strategy.</p>
                </div>

                <div class="col-sm-6 col-md-3 de-step de-step-arrow wow fadeInRight" data-wow-delay=".6s">
                    <div class="de-step-icon bg-color-op-2">
                        <i class="id-color fas fa-pencil-ruler fa-2x wow rotateIn" data-wow-delay=".9s"></i>
                    </div>
                    <h3 class="hs-4">Planning</h3>
                    <p>Comprehensive planning covering timelines, resources, materials and budgets.</p>
                </div>

                <div class="col-sm-6 col-md-3 de-step de-step-arrow wow fadeInRight" data-wow-delay=".9s">
                    <div class="de-step-icon bg-color-op-2">
                        <i class="id-color fas fa-hammer fa-2x wow rotateIn" data-wow-delay="1.2s"></i>
                    </div>
                    <h3 class="hs-4">Execution</h3>
                    <p>Skilled teams deliver with precision, maintaining quality and safety at every stage.</p>
                </div>

                <div class="col-sm-6 col-md-3 de-step wow fadeInRight" data-wow-delay="1.2s">
                    <div class="de-step-icon bg-color-op-2">
                        <i class="id-color fas fa-clipboard-check fa-2x wow rotateIn" data-wow-delay="1.5s"></i>
                    </div>
                    <h3 class="hs-4">Handover</h3>
                    <p>Final inspection, client walkthrough, and smooth project handover with documentation.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-3 g-4 align-items-center justify-content-between">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".2s">
                    <div class="subtitle id-color wow fadeInUp">Our Clients</div>
                    <h2 class="wow fadeInUp">Trusted by Leading Companies</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <a href="{{ route('portfolio') }}">
                            <img src="{{ asset('images/projects/architecture-8254661.jpg') }}" class="w-100 hover-scale-1-2" alt="">
                        </a>
                    </div>
                    <h3 class="hs-4">Orbital Highway</h3>
                    <p class="mb-0">Material supply for Orbital Highway project — working with Al Jaber, J&amp;P, QDVC and Daewoo.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <a href="{{ route('portfolio') }}">
                            <img src="{{ asset('images/projects/2.webp') }}" class="w-100 hover-scale-1-2" alt="">
                        </a>
                    </div>
                    <h3 class="hs-4">Fibertech Glass Factory</h3>
                    <p class="mb-0">Construction of Fibertech Glass Factory Stage 1 &amp; 2 for Welcare Group.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <a href="{{ route('portfolio') }}">
                            <img src="{{ asset('images/projects/3.webp') }}" class="w-100 hover-scale-1-2" alt="">
                        </a>
                    </div>
                    <h3 class="hs-4">Al Bida Park</h3>
                    <p class="mb-0">Completed project for GT — one of our landmark public sector deliveries in Qatar.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>
    .hero-swiper .swiper-slide-active .swiper-inner {
        animation: heroZoom 8s ease-out forwards;
    }
    @keyframes heroZoom {
        from { transform: scale(1); }
        to { transform: scale(1.15); }
    }
    .typed-cursor {
        animation: blink 0.7s infinite;
    }
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hero swiper
        if (typeof Swiper !== 'undefined') {
            var heroEl = document.querySelector('.hero-swiper');
            if (heroEl) {
                new Swiper(heroEl, {
                    loop: true,
                    speed: 1500,
                    autoplay: { delay: 5000, disableOnInteraction: false },
                    effect: 'fade',
                    fadeEffect: { crossFade: true }
                });
            }
        }

        // Typing animation
        var el = document.getElementById('typed-text');
        if (!el) return;
        var texts = [
            "Building Qatar's Future",
            "Construction & MEP Experts",
            "Your Trusted Partner"
        ];
        var textIndex = 0, charIndex = 0, isDeleting = false;

        function type() {
            var current = texts[textIndex];
            if (!isDeleting) {
                charIndex++;
                el.textContent = current.substring(0, charIndex);
                if (charIndex === current.length) { setTimeout(function() { isDeleting = true; type(); }, 2000); return; }
                setTimeout(type, 70);
            } else {
                charIndex--;
                el.textContent = current.substring(0, charIndex);
                if (charIndex === 0) { isDeleting = false; textIndex = (textIndex + 1) % texts.length; setTimeout(type, 500); return; }
                setTimeout(type, 40);
            }
        }
        setTimeout(type, 600);
    });
</script>
@endpush
