@extends('layouts.app')

@section('title', 'Terms & Conditions — Develeco Trading and Contracting WLL')

@section('content')

    <section class="jarallax relative overflow-hidden z-1000 padding-top">
        <img src="{{ asset('images/background/architecture-8254661.jpg') }}" class="jarallax-img page-banner-zoom" alt="">
        <div class="sw-overlay op-5"></div>
        <div class="gradient-edge-start light w-40 start-40 op-9 z-2"></div>
        <div class="abs w-40 h-100 bg-white top-0 start-0 op-9 z-2"></div>
        <div class="container relative z-2 text-lissght">
            <div class="row wow fadeInRight">
                <div class="col-lg-10">
                    <h1 class="fs-sm-10vw mb-0">Terms &amp; Conditions</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Terms &amp; Conditions</li>
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

                    <h3>1. Acceptance of Terms</h3>
                    <p>By accessing and using the website develecoqatar.com, you accept and agree to be bound by these Terms and Conditions. If you do not agree, please do not use this website.</p>

                    <h3>2. Services</h3>
                    <p>Develeco Trading and Contracting WLL provides trading and contracting services including construction, interior design, joinery, MEP, transportation, material supply, heavy equipment rental, and facility management. All services are subject to separate contractual agreements.</p>

                    <h3>3. Quotations</h3>
                    <p>Quotations provided through our website or upon request are estimates and remain valid for 30 days unless otherwise stated. Final pricing is subject to site assessment, scope confirmation, and formal agreement.</p>

                    <h3>4. Intellectual Property</h3>
                    <p>All content on this website, including text, graphics, logos, images, and design, is the property of Develeco Trading and Contracting WLL and is protected by applicable intellectual property laws. You may not reproduce, distribute, or use any content without prior written consent.</p>

                    <h3>5. Website Use</h3>
                    <p>You agree to use this website only for lawful purposes and in a manner that does not infringe the rights of, or restrict or inhibit the use of this website by, any third party.</p>

                    <h3>6. Limitation of Liability</h3>
                    <p>While we strive to keep information accurate and up-to-date, we make no warranties or representations about the completeness, accuracy, or reliability of any content on this website. Develeco Trading and Contracting WLL shall not be liable for any loss or damage arising from the use of this website.</p>

                    <h3>7. Third-Party Links</h3>
                    <p>Our website may contain links to third-party websites. We are not responsible for the content or privacy practices of these external sites.</p>

                    <h3>8. Governing Law</h3>
                    <p>These terms are governed by and construed in accordance with the laws of the State of Qatar. Any disputes shall be subject to the exclusive jurisdiction of the courts of Qatar.</p>

                    <h3>9. Changes to Terms</h3>
                    <p>We reserve the right to update or modify these Terms and Conditions at any time without prior notice. Continued use of the website after changes constitutes acceptance of the updated terms.</p>

                    <h3>10. Contact</h3>
                    <p>For questions regarding these Terms and Conditions, please contact us at:</p>
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
