@extends('layouts.app')

@section('title', 'Privacy Policy — Develeco Trading and Contracting WLL')

@section('content')

    <section class="jarallax relative overflow-hidden z-1000 padding-top">
        <img src="{{ asset('images/background/architecture-8254661.jpg') }}" class="jarallax-img page-banner-zoom" alt="">
        <div class="sw-overlay op-5"></div>
        <div class="gradient-edge-start light w-40 start-40 op-9 z-2"></div>
        <div class="abs w-40 h-100 bg-white top-0 start-0 op-9 z-2"></div>
        <div class="container relative z-2">
            <div class="row wow fadeInRight">
                <div class="col-lg-10">
                    <h1 class="fs-sm-10vw mb-0">Privacy Policy</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="text-muted mb-4">Last updated: {{ date('F Y') }}</p>

                    <h3>1. Introduction</h3>
                    <p>Develeco Trading and Contracting WLL ("we", "us", or "our") respects your privacy and is committed to protecting the personal information you share with us. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website develecoqatar.com or engage with our services.</p>

                    <h3>2. Information We Collect</h3>
                    <p>We may collect the following types of information:</p>
                    <ul>
                        <li><strong>Personal Information:</strong> Name, email address, phone number, company name, and project details provided through our contact and quote forms.</li>
                        <li><strong>Usage Data:</strong> Browser type, IP address, pages visited, and time spent on our website, collected automatically through standard web technologies.</li>
                    </ul>

                    <h3>3. How We Use Your Information</h3>
                    <p>We use the information collected to:</p>
                    <ul>
                        <li>Respond to your enquiries and provide quotations</li>
                        <li>Communicate about our services and project updates</li>
                        <li>Improve our website and user experience</li>
                        <li>Comply with legal obligations</li>
                    </ul>

                    <h3>4. Information Sharing</h3>
                    <p>We do not sell, trade, or rent your personal information to third parties. We may share information only with trusted service providers who assist us in operating our website or conducting our business, subject to confidentiality agreements.</p>

                    <h3>5. Data Security</h3>
                    <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>

                    <h3>6. Data Retention</h3>
                    <p>We retain personal information only for as long as necessary to fulfill the purposes for which it was collected, or as required by applicable laws.</p>

                    <h3>7. Your Rights</h3>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Request access to your personal data</li>
                        <li>Request correction or deletion of your data</li>
                        <li>Withdraw consent for data processing</li>
                    </ul>

                    <h3>8. Contact Us</h3>
                    <p>If you have questions about this Privacy Policy, please contact us at:</p>
                    <ul>
                        <li>Email: info@develecoqatar.com</li>
                        <li>Phone: +974 4441 9250</li>
                        <li>Address: Old Slata, Street 850, Building 18, Office No. 5, Doha, Qatar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
