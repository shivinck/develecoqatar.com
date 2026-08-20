@extends('layouts.app')

@section('title', 'Portfolio — Develeco Trading and Contracting WLL')

@section('content')

    <section class="jarallax relative overflow-hidden z-1000 padding-top">
        <img src="{{ asset('images/background/architecture-8254661.jpg') }}" class="jarallax-img page-banner-zoom" alt="">
        <div class="sw-overlay op-5"></div>
        <div class="gradient-edge-start light w-40 start-40 op-9 z-2"></div>
        <div class="abs w-40 h-100 bg-white top-0 start-0 op-9 z-2"></div>
        <div class="container relative z-2">
            <div class="row wow fadeInRight">
                <div class="col-lg-10">
                    <h1 class="fs-sm-10vw mb-0">Our Portfolio</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Completed Projects -->
    <section>
        <div class="container">
            <div class="row g-4 justify-content-center mb-4">
                <div class="col-lg-6 text-center">
                    <div class="subtitle wow fadeInUp">Completed</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Completed Projects</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <img src="{{ asset('images/projects/1.jpg') }}" class="w-100 hover-scale-1-2" alt="">
                    </div>
                    <h4>Al Bida Park</h4>
                    <div class="d-flex mb-3">
                        <span class="me-3 bg-light px-3 fs-14 rounded-1">Client: GT</span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <img src="{{ asset('images/projects/2.jpg') }}" class="w-100 hover-scale-1-2" alt="">
                    </div>
                    <h4>Fibertech Glass Factory – Stage 1</h4>
                    <div class="d-flex mb-3">
                        <span class="me-3 bg-light px-3 fs-14 rounded-1">Client: Welcare Group</span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <img src="{{ asset('images/projects/3.jpg') }}" class="w-100 hover-scale-1-2" alt="">
                    </div>
                    <h4>Doha Travels Interior</h4>
                    <div class="d-flex mb-3">
                        <span class="me-3 bg-light px-3 fs-14 rounded-1">Client: Doha Travels</span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <img src="{{ asset('images/projects/4.webp') }}" class="w-100 hover-scale-1-2" alt="">
                    </div>
                    <h4>GHI Office Renovation &amp; Interior</h4>
                    <div class="d-flex mb-3">
                        <span class="me-3 bg-light px-3 fs-14 rounded-1">Client: GHI Qatar</span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <img src="{{ asset('images/projects/5.webp') }}" class="w-100 hover-scale-1-2" alt="">
                    </div>
                    <h4>100 Villa – Interlock &amp; Kerbstones</h4>
                    <div class="d-flex mb-3">
                        <span class="me-3 bg-light px-3 fs-14 rounded-1">Client: Al Sulaiti Private Construction</span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="hover rounded-1 overflow-hidden relative mb-4">
                        <img src="{{ asset('images/projects/6.webp') }}" class="w-100 hover-scale-1-2" alt="">
                    </div>
                    <h4>Construction of Palace</h4>
                    <div class="d-flex mb-3">
                        <span class="me-3 bg-light px-3 fs-14 rounded-1">Client: Ligment Trad &amp; Cont.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Material Supply Projects -->
    <section class="bg-color-op-1">
        <div class="container">
            <div class="row g-4 justify-content-center mb-4">
                <div class="col-lg-6 text-center">
                    <div class="subtitle wow fadeInUp">Supply</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Materials Supplied</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="p-4 bg-white rounded-1">
                        <h4 class="mb-2">Project Manatech (Gulfar)</h4>
                        <p class="mb-0 text-muted">Client: Rook Middle East</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="p-4 bg-white rounded-1">
                        <h4 class="mb-2">Kaharma Project – Umm Al Houl</h4>
                        <p class="mb-0 text-muted">Client: Samsung</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="p-4 bg-white rounded-1">
                        <h4 class="mb-2">Al Khor Express Way</h4>
                        <p class="mb-0 text-muted">Client: Attikatt</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="p-4 bg-white rounded-1">
                        <h4 class="mb-2">E Ring Road, North/South Link</h4>
                        <p class="mb-0 text-muted">Client: Daewoo</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="p-4 bg-white rounded-1">
                        <h4 class="mb-2">Orbital Highway</h4>
                        <p class="mb-0 text-muted">Clients: Al Jaber, J&amp;P, QDVC</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                    <div class="p-4 bg-white rounded-1">
                        <h4 class="mb-2">Manatech</h4>
                        <p class="mb-0 text-muted">Client: HLG</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
