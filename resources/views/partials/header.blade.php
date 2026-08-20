<header class="header-light transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo-main" src="{{ asset('images/branding/develeco-logo-hp.png') }}" alt="Develeco Qatar">
                                <img class="logo-scroll" src="{{ asset('images/branding/develeco-logo-hp.png') }}" alt="Develeco Qatar">
                                <img class="logo-mobile" src="{{ asset('images/branding/develeco-logo-hp.png') }}" alt="Develeco Qatar">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="{{ route('home') }}">Home</a></li>
                            <li><a class="menu-item" href="{{ route('about') }}">About</a></li>
                            <li><a class="menu-item" href="{{ route('services') }}">Services</a></li>
                            <li><a class="menu-item" href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                        <!-- mainmenu end -->
                    </div>
                    <div class="de-flex-col">
                        <div class="menu_side_area">
                            <a href="{{ route('quote') }}" class="btn-main fx-slide"><span>Get a Quote</span></a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
