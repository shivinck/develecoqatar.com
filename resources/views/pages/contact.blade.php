@extends('layouts.app')

@section('title', 'Contact Us — Develeco Trading and Contracting WLL')

@section('content')

    <section class="jarallax relative overflow-hidden z-1000">
        <img src="{{ asset('images/background/architecture-8254661.jpg') }}" class="jarallax-img page-banner-zoom" alt="">
        <div class="sw-overlay op-2"></div>
        <div class="gradient-edge-start light w-40 start-40 op-9 z-2"></div>
        <div class="abs w-40 h-100 bg-white top-0 start-0 op-9 z-2"></div>
        <div class="container relative z-2">
            <div class="row wow fadeInRight">
                <div class="col-lg-10">
                    <h1 class="fs-sm-10vw mb-0">Contact Us</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="subtitle">Reach Us</div>
                    <h2 class="wow fadeInUp">Get In Touch</h2>

                    <p class="col-lg-8">Have a question, enquiry, or want to discuss a potential project? We're here and happy to hear from you.</p>

                    <div class="spacer-single"></div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-location-pin"></i>
                            <div class="ms-80px">
                                <h4 class="mb-0">Office</h4>
                                Old Slata, Street 850,<br>Building 18, Office No. 5<br>Doha, Qatar
                            </div>
                        </div>

                        <div class="col-md-6">
                            <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-envelope"></i>
                            <div class="ms-80px">
                                <h4 class="mb-0">Email</h4>
                                info@develecoqatar.com
                            </div>
                        </div>

                        <div class="col-md-6">
                            <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-phone"></i>
                            <div class="ms-80px">
                                <h4 class="mb-0">Telephone</h4>
                                +974 4441 9250
                            </div>
                        </div>

                        <div class="col-md-6">
                            <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-smart-phone"></i>
                            <div class="ms-80px">
                                <h4 class="mb-0">Mobile</h4>
                                +974 7066 4088
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-color-op-1 rounded-1 p-40 relative">

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h5>Name</h5>
                                    <input type="text" name="name" class="bg-white form-control" placeholder="Your Name" value="{{ old('name') }}" required>
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Email</h5>
                                    <input type="email" name="email" class="bg-white form-control" placeholder="Your Email" value="{{ old('email') }}" required>
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Phone</h5>
                                    <input type="text" name="phone" class="bg-white form-control" placeholder="+974 XXXX XXXX" value="{{ old('phone') }}" required>
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Message</h5>
                                    <textarea name="message" class="bg-white form-control h-100px" placeholder="Your Message" required>{{ old('message') }}</textarea>
                                    @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-main">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
