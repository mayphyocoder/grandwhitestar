<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">



                <!--Footer Column-->
                <div class="footer-column  mb-0">
                    <div class="footer-widget links-widget">
                        <div class="row">

                            <div class="footer-column col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <h5 class="widget-title">Contact Us</h5>
                                    <div class="text">
                                        Room (206), Building (2), Anawyahtar Housing,
                                        Ward No. 2, Botahtaung Pagoda Road,
                                        Puzundaung Township, Yangon, Myanmar 11171.
                                    </div>
                                    <ul class="contact-info">
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a href="mailto:info@grandwhitestar.com">
                                                info@grandwhitestar.com
                                            </a>
                                            <br>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone-square"></i>
                                            <a href="tel:(+95) 09 795409789">
                                                (+95) 09 795409789
                                            </a>
                                            <br>
                                            <a href="tel:(+95) 09 451590333">
                                                (+95) 09 451590333
                                            </a>
                                            <br>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <h5 class="widget-title">
                                    Quick Links
                                </h5>
                                <ul class="user-links">
                                    <li>
                                        <a href="{{ route('about.index') }}">
                                            Our Company
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('ceo_message') }}">
                                            CEO’s MESSAGE
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('team') }}">
                                            Professional Team
                                        </a>
                                    </li>

                                    <li class="current">
                                        <a href="{{ asset('data/grand_white_star_profile.pdf') }}" target="_blank">
                                            Company Brochure
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <h5 class="widget-title">
                                    Find Overseas Jobs
                                </h5>
                                <ul class="user-links">
                                    @foreach ($countries as $country)
                                        <li>
                                            <a href="{{ route('job.show', $country->id) }}">
                                                {{ $country->country ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h5 class="widget-title">
                                        Facebook
                                    </h5>
                                    <div class="widget-content">
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">
                    Copyright © {{ now()->year }}
                    Grand White Star Co.,Ltd. All Rights Reserved
                </div>

                <ul class="social-icon-two">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
