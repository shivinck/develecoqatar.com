<footer class="section-dark">
    <div class="container">
        <div class="row gx-5">

            <div class="col-lg-4 col-sm-6">
                <img src="{{ asset('images/branding/develeco-logo.png') }}" class="logo-footer" alt="Develeco Qatar">
                <div class="spacer-20"></div>

                <p>
                    Develeco is one of the smartest industries with single source solution — providing exemplary services comprising construction, interior design, joinery, MEP, transportation and facility management.
                </p>

                <div class="social-icons mb-sm-30">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://wa.me/97470664088" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                <div class="row">

                    <div class="col-lg-6 col-sm-6">
                        <div class="widget">
                            <h2 class="hs-5">Company</h2>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="widget">
                            <h2 class="hs-5">Services</h2>
                            <ul>
                                <li><a href="{{ route('services') }}">Transport &amp; Material Supply</a></li>
                                <li><a href="{{ route('services') }}">Heavy Equipment Rental</a></li>
                                <li><a href="{{ route('services') }}">Maintenance &amp; Construction</a></li>
                                <li><a href="{{ route('services') }}">Interior Design</a></li>
                                <li><a href="{{ route('services') }}">MEP Works</a></li>
                                <li><a href="{{ route('services') }}">Facility Management</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                <div class="widget">

                    <div class="fw-bold text-white">
                        <i class="icofont-location-pin me-2 id-color-2"></i>
                        Office Location
                    </div>
                    Old Slata, Street 850,<br>Building 18, Office No. 5, Doha, Qatar

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-envelope me-2 id-color-2"></i>
                        Email Us
                    </div>
                    info@develecoqatar.com

                    <div class="spacer-10"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-phone me-2 id-color-2"></i>
                        Telephone
                    </div>
                    +974 4441 9250

                    <div class="spacer-10"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-smart-phone me-2 id-color-2"></i>
                        Mobile
                    </div>
                    +974 7066 4088

                </div>
            </div>

        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            Copyright &copy; {{ date('Y') }} Develeco Trading and Contracting WLL. All Rights Reserved.
                        </div>

                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                            <li class="list-inline-item"><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
