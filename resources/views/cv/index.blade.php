@extends('layouts.main')
@section('title', 'Submit Cv')
@section('content')

    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-12 col-md-12">
                    <div class="inner-column wow fadeInRight">
                        <div class="sec-title">
                            <i class="sub-title">
                                Grand White Star Co.,Ltd
                            </i>
                            <h2>Few Reasons to Choose Our Company.</h2>
                            <div class="text" style="color: black; font-size: 18px;">
                                Expertise and Experience: We have a team of experienced professionals who specialize in
                                recruitment and talent acquisition.
                            </div>
                        </div>

                        <div class="info-box">
                            <i class="icon flaticon-job-interview"></i>
                            <span class="sub-title">Benefit 01</span>
                            <h4 class="title">Direct Online Interviews</h4>
                            <a href="{{ route('contact.index') }}" class="read-more">
                                <i class="fa fa-long-arrow-alt-right"></i>
                            </a>
                        </div>

                        <div class="info-box">
                            <i class="icon flaticon-approved-1"></i>
                            <span class="sub-title">Benefit 02</span>
                            <h4 class="title">Quick & Easy Process</h4>
                            <a href="{{ route('contact.index') }}" class="read-more">
                                <i class="fa fa-long-arrow-alt-right"></i>
                            </a>
                        </div>

                        <div class="info-box">
                            <i class="icon flaticon-passport-16"></i>
                            <span class="sub-title">Benefit 03</span>
                            <h4 class="title">99% Visa Approvals</h4>
                            <a href="{{ route('contact.index') }}" class="read-more">
                                <i class="fa fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="content-column col-xl-6 col-lg-12 col-md-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="sec-title">
                            <i class="sub-title">
                                Job Application Form
                            </i>
                            <h2>
                                Apply for your job
                            </h2>
                            <div class="text" style="color: black; font-size: 18px;">
                                Please
                                <a href="{{ asset('data/CV sample.pdf') }}" download="" style="color: red;">
                                    download
                                </a>,
                                fill in your information and attach your resume for submission.
                                Please be assured that all submissions received will be treated with strictest
                                confidentiality.
                            </div>
                        </div>

                        <style>
                            .form-control,
                            .input-text {
                                background-color: white !important;
                                box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
                            }
                        </style>

                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                            enctype="multipart/form-data" id="create-form" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;">Name*</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;">Phone</label>
                                        <input type="text" name="phone" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="col-lg-12 py-3">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;">Additional Note</label>
                                        <textarea class="form-control" rows="5" name="additional_note"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 py-3">
                                    <div class="form-group">
                                        <label for="img" style="color: black; font-weight: bold;">
                                            Select your CV to
                                            upload
                                        </label>
                                        <br>
                                        <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                            class="form-control-file" required>
                                    </div>
                                </div>

                                <div class="col-md-12 py-3">
                                    <button type="submit" class="theme-btn btn-style-one"
                                        data-loading-text="Please wait...">
                                        <span class="btn-title">
                                            Submit Now
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
