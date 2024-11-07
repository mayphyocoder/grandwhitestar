@extends('layouts.main')
@section('title', 'Welcome')
@section('content')


    <section class="features-section">
        <div class="anim-icons">
            <span class="icon icon-object-1"></span>
        </div>
        <div class="auto-container">
            <div class="outer-box">
                <div class="row">
                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="inner-box ">
                            <div class="icon-box">
                                <span class="count">01</span>
                                <i class="icon flaticon-passport"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title">Search the right job.</h5>
                                <div class="text">Find your deal job with Grand White Star.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms"
                        style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="inner-box ">
                            <div class="icon-box">
                                <span class="count">02</span>
                                <i class="icon flaticon-visa-4"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title">Submit CV</h5>
                                <div class="text">Faster Enrollments for your CV.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms"
                        style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                        <div class="inner-box ">
                            <div class="icon-box">
                                <span class="count">03</span>
                                <i class="icon flaticon-stamp-1"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title">Apply Jobs</h5>
                                <div class="text">Submit your resume now.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-text">
                    Top Rated By Customers &amp; Immigration Firms With 100% Success Rate.
                </div>
            </div>
        </div>
    </section>

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




    <section class="process-section pt-50">
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



    <section class="countries-section-two">
        <div class="auto-container">
            <div class="bg-image" style="background-image: url({{ asset('assets/images/icons/pattern-8.png') }})"></div>

            <div class="sec-title text-center light">
                <span class="sub-title">Countries we offer</span>
                <h2>Countries We Support <br>for Jobs.</h2>
            </div>

            <div class="carousel-outer">
                <div class="countries-carousel owl-carousel owl-theme">
                    @foreach ($countries as $country)
                        <div class="country-block-two">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src=" {{ $country->photo ?? '' }}" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="title">
                                        <a href="{{ route('job.show', $country->id) }}">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="countries-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Grand White Star Co.,Ltd
                </span>
                <h2>
                    Available Jobs
                </h2>
            </div>

            {{-- carousel-outer --}}
            <div class="">
                {{-- countries-carousel owl-carousel owl-theme --}}
                <div class="row">
                    @foreach ($jobs as $job)
                        <div class="col-md-4">
                            <div class="country-block">
                                <div class="inner-box"
                                    style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ $job->photo }}" alt=""
                                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                        </figure>
                                    </div>
                                    <div class="content-box">
                                        <div class="flag">
                                            <img src="{{ $job->country->photo ?? '' }}" alt="">
                                        </div>
                                        <h5 class="title">
                                            <a href="">
                                                {{ $job->title ?? '' }}
                                            </a>
                                        </h5>
                                        <a href="{{ route('cv.index') }}" class="read-more">
                                            Apply Now
                                            <i class="fa fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <div class="call-to-action">
        <div class="auto-container">
            <div class="inner-container">
                <h5 class="title">
                    Let's work with us to choose honest and hardworking candidates(staffs) for the right jobs.
                </h5>
                <a href="tel:(+95) 09 451590333" class="info-btn">
                    <i class="fa fa-phone"></i>
                    (+95) 09 451590333
                </a>
            </div>
        </div>
    </div>

    <section class="countries-section">
        <div class="auto-container">
            <div class="bg-layer"></div>
            <div class="sec-title text-center light">
                <span class="sub-title">
                    Grand White Star Co.,Ltd
                </span>
                <h2>
                    Our Gallery & Activities
                </h2>
            </div>

            <div class="row py-3" hidden>
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="news-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box"
                                style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                                <div class="image-box">
                                    <figure class="image">
                                        <img data-enlargeable="" src="{{ $image }}" alt=""
                                            style="width: 100%; height: 350px; background-size: top; object-fit: cover; border: 3px solid #057AC6; padding: 10px;">
                                    </figure>
                                    <span class="date">
                                        Photo
                                    </span>
                                </div>
                                <div class="content-box" style="width: 100%;">
                                    <div class="content">
                                        <ul class="post-info">
                                            <li><i class="fa fa-user"></i> by Admin</li>
                                            <li>
                                                <i class="fa fa-comments"></i>
                                                Grand White Star Co.,Ltd
                                            </li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="">
                                                {{ $activity->title ?? '' }}
                                            </a>
                                        </h4>
                                        <a href="{{ route('contact.index') }}" class="read-more">
                                            Contact Us
                                            <i class="fa fa-phone"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </section>

@endsection
