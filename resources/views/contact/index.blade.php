@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">
                            Need Some Advice?
                        </span>
                        <h2>
                            Interested in discussing?
                        </h2>
                    </div>

                    <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}" autocomplete="off">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="theme-btn btn-style-one"
                                    data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">
                                Need Some Advice?
                            </span>
                            <h2>Get in touch with us</h2>
                            <div class="text" style="color: black;">
                                If you have any questions about our services or would like more information
                                about our overseas employment agency, please do not hesitate to get in touch. We
                                are available by phone, email, or through our contact form on our website.
                                Our friendly team of experts are always happy to answer any questions or queries
                                you may have.
                            </div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon bg-theme-color2">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:(+95) 09 795409789">
                                        (+95) 09 795409789,
                                    </a>
                                    <a href="tel:(+95) 09 451590333">
                                        (+95) 09 451590333
                                    </a>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:info@grandwhitestar.com">
                                        info@grandwhitestar.com
                                    </a>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit anytime</h6>
                                    <span style="font-size: 16px;">
                                        Room (206), Building (2), Anawyahtar Housing, <br> Ward No. 2, Botahtaung Pagoda
                                        Road, <br> Puzundaung Township, Yangon, Myanmar 11171.
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
