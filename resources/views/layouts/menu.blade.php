<header class="main-header header-style-one">
    <div class="header-top">
        <div class="inner-container">
            <div class="top-left">
                <ul class="list-style-one">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@grandwhitestar.com">info@grandwhitestar.com</a>
                    </li>

                    <li>
                        <i class="fa fa-mobile-alt"></i>
                        <a href="tel:(+95) 9 795409789">
                            (+959) 9 795 409 789
                        </a>


                    </li>

                    <li>
                        <i class="fa fa-star"></i>
                        We are one of the best oversea employment agencies in Myanmar.
                    </li>
                    <li>
                        <i class="fa fa-mobile-alt"></i>
                        <a href="tel:(+95) 9 451 590 333">
                            (+959) 9 451 590 333
                        </a>


                    </li>
                </ul>
            </div>
        </div>


    </div>

    <div class="header-lower" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px; background-color: #2c8fcc;">
        <div class="main-box">
            <div class="logo-box">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo.png') }}" alt="" title="Grand White Star Co.,Ltd"
                            style="width: 100px;">
                    </a>
                </div>
            </div>

            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">

                        <li class="current">
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="current dropdown">
                            <a href="#">
                                About Us
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        Our Company
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ceo_message') }}">
                                        MD's Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}">
                                        Professional Teams
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="current">
                            <a href="{{ asset('data/grand_white_star_profile.pdf') }}" target="_blank">
                                Company Brochure
                            </a>
                        </li>

                        <li class="current dropdown">
                            <a href="#">
                                Network & Overseas Jobs
                            </a>
                            <ul>
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="current dropdown">
                            <a href="#">
                                Submit Form
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('employer.index') }}">
                                        Employer Form
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('cv.index') }}">
                                        Submit Resume
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="current dropdown">
                            <a href="#">
                                Gallery & Activities
                            </a>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('activities.show', $category->id) }}">
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="current">
                            <a href="{{ route('contact.index') }}">
                                Contact
                            </a>
                        </li>

                    </ul>
                </nav>

                <div class="outer-box">
                    <a href="tel:+92(8800)9806" class="info-btn">
                        <i class="icon fa fa-phone"></i>
                        <small>Call Anytime</small><br> (+95) 09 451590333
                    </a>

                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}" title="">
                        <img src="{{ asset('data/logo.png') }}" alt="" title="">
                    </a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
            </ul>
            <ul class="contact-list-one">
                <li>
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:(+95) 09 795409789">
                            (+95) 09 795409789
                            <br>
                            (+95) 09 451590333
                        </a>
                    </div>
                </li>

                <li>
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:santintoo@gmail.com">santintoo@gmail.com</a>
                    </div>
                </li>

                <li>
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Sat 8:00 - 5:00, Sunday - CLOSED
                    </div>
                </li>
            </ul>


            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->


    <!-- Sticky Header  -->
    <div class="sticky-header" style="height: 80px !important; box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
        <div class="auto-container">
            <div class="inner-container">

                <div class="">
                    <a href="{{ route('home') }}" title="">
                        <img src="{{ asset('data/logo.png') }}" alt="" title="" style="width: 90px;">
                    </a>
                </div>

                <div class="nav-outer">
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                            </ul>
                        </div>
                    </nav>

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->
</header>
