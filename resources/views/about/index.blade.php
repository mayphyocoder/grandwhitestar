@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')

    <section class="why-choose-us py-5">
        <div class="auto-container">
            <div class="row">

                <div class="content-column col-xl-7 col-lg-7 col-md-7">
                    <div class="inner-column wow fadeInRight">
                        <div class="sec-title">
                            <i class="sub-title">
                                About us
                            </i>
                            <h2>
                                Grand White Star Co.,Ltd
                            </h2>
                            <div class="text" style="text-align: justify; color: black; font-size: 17px;">
                                We believe that the right talent can transform organizations and elevate
                                careers to new heights. Our journey began with a shared vision of bridging
                                the gap between talented individuals and exceptional opportunities, and
                                today, we stand proud as a leading recruitment agency, making meaningful
                                connections that drive success.

                                <br><br>

                                Grand White Star Co.,Ltd was founded in 2018, driven by a passion for
                                empowering professionals and organizations to achieve their full potential.
                                Our founders experienced the challenges of finding the perfect fit firsthand,
                                and this ignited the idea of building a recruitment company that goes beyond
                                matching skills, aiming to unite values and ambitions.
                            </div>

                            <ul class="features-list py-3">
                                <li style="color: black;">
                                    Company Registration No. 102022041
                                </li>

                                <li style="color: black;">
                                    Licence No. 98/2022
                                </li>

                                <li style="color: black;">
                                    Licence No. 177/2022 (Thai)
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>

                <div class="image-column col-xl-5 col-lg-5 col-md-5 py-5">
                    <div class="inner-column wow fadeInLeft">
                        <div class="image-box">

                            <figure class="image">
                                <img src="{{ asset('data/about.jpeg') }}" alt=""
                                    style="width: 100%; height: auto; background-size: top; object-fit: cover;">
                            </figure>

                            <figure class="plane">
                                <img src="{{ asset('assets/images/resource/icon-plane.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fun-fact-section">
        <div class="bg-layer"></div>
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!-- Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner">
                            <i class="icon flaticon-passport-16"></i>
                            <div class="count-box">
                                <span class="count-text" data-speed="3000" data-stop="5">0</span>+
                            </div>
                            <h6 class="counter-title">
                                Experiences
                            </h6>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <i class="icon flaticon-group"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="15">0</span>+
                            </div>
                            <h6 class="counter-title">Team Members</h6>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner">
                            <i class="icon flaticon-life-insurance"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="287">0</span>
                            </div>
                            <h6 class="counter-title">Sending Labour</h6>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                        <div class="inner">
                            <i class="icon flaticon-cooperation"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span></div>
                            <h6 class="counter-title">
                                Sending Country
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery-section pt-0">
        <div class="auto-container">
            <div class="carousel-outer">
                <ul class="gallery-carousel owl-carousel owl-theme wow fadeInUp">
                    <li class="gallery-item">
                        <a href="{{ asset('data/1.png') }}" class="lightbox-image">
                            <img src="{{ asset('data/1.png') }}" alt="">
                        </a>
                    </li>
                    
                    
                    <li class="gallery-item">
                        <a href="{{ asset('data/d1.png') }}" class="lightbox-image">
                            <img src="{{ asset('data/d1.png') }}" alt="">
                        </a>
                    </li>
                    
                    
                    <li class="gallery-item">
                        <a href="{{ asset('data/d2.png') }}" class="lightbox-image">
                            <img src="{{ asset('data/d2.png') }}" alt="">
                        </a>
                    </li>
                    
                    
                    <li class="gallery-item">
                        <a href="{{ asset('data/d3.png') }}" class="lightbox-image">
                            <img src="{{ asset('data/d3.png') }}" alt="">
                        </a>
                    </li>
                    
                    
                    <li class="gallery-item">
                        <a href="{{ asset('data/d4.png') }}" class="lightbox-image">
                            <img src="{{ asset('data/d4.png') }}" alt="">
                        </a>
                    </li>
                    
                    <li class="gallery-item">
                        <a href="{{ asset('data/d5.png') }}" class="lightbox-image">
                            <img src="{{ asset('data/d5.png') }}" alt="">
                        </a>
                    </li>

                    <li class="gallery-item">
                        <a href="{{ asset('data/2.png') }}" class="lightbox-image">
                            <img src="{{ asset('data/2.png') }}" alt="">
                        </a>
                    </li>

                    <li class="gallery-item">
                        <a href="{{ asset('data/3.png') }}" class="lightbox-image">
                            <img src="{{ asset('data/3.png') }}" alt="">
                        </a>
                    </li>

                    <li class="gallery-item">
                        <a href="{{ asset('data/4.jpg') }}" class="lightbox-image">
                            <img src="{{ asset('data/4.jpg') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="process-section pt-0">
        <span class="wide-map"></span>
        <div class="anim-icons">
            <span class="icon icon-object-1"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Grand White Star Co.,Ltd
                </span>
                <h2>
                    Our Vision, Mision & Value
                </h2>
            </div>

            <div class="row">
                <!-- Process block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/vision.png') }}" alt="">
                            </figure>
                            <span class="count">01</span>
                        </div>
                        <div class="info-box">
                            <h6 class="title">
                                Our Vision
                            </h6>
                            <div class="text">
                                To be the global leader in connecting talent with international opportunities, fostering
                                a world where every individual can achieve their global career aspirations.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/goal.png') }}" alt="">
                            </figure>
                            <span class="count">02</span>
                        </div>
                        <div class="info-box">
                            <h6 class="title">
                                Our Mission
                            </h6>
                            <div class="text">
                                Our mission is to empower job seekers and employers to thrive in a diverse global
                                workforce.
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process block Two  -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('data/loan-to-value.png') }}" alt="">
                            </figure>
                            <span class="count">03</span>
                        </div>
                        <div class="info-box">
                            <h6 class="title"><a href="javascript::void(0)">Our Value</a></h6>
                            <div class="text">
                                <ul>
                                    <li>
                                        <span class="fa fa-check" style="color: #057ac6;"></span>
                                        Excellence
                                    </li>
                                    <li>
                                        <span class="fa fa-check" style="color: #057ac6;"></span>
                                        Integrity
                                    </li>
                                    <li>
                                        <span class="fa fa-check" style="color: #057ac6;"></span>
                                        Collaboration
                                    </li>
                                    <li>
                                        <span class="fa fa-check" style="color: #057ac6;"></span>
                                        Responsibility
                                    </li>
                                </ul>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
