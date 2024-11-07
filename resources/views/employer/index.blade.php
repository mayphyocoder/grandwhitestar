@extends('layouts.main')
@section('title', 'Employer Form')
@section('content')
    <section class="faqs-section style-two">
        <div class="auto-container">
            <div class="row">

                <div class="faq-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">
                                GRAND WHITE STAR CO.,LTD
                            </span>
                            <h2>Apply for your company!</h2>
                            <div class="text">
                                When it comes to choosing an overseas employment agency, there are several factors that
                                potential clients consider. Here are some reasons why someone might choose your agency:
                            </div>
                        </div>

                        <ul class="accordion-box wow fadeInRight">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    Experience and Expertise
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            Highlight your agency's track record in successfully placing
                                            candidates in overseas positions. Showcase your expertise in navigating complex
                                            international employment regulations and procedures.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    Global Network
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            Emphasize your extensive network of connections with employers and
                                            businesses worldwide, providing a wide range of job opportunities in various
                                            industries
                                            and
                                            locations.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    Comprehensive Services
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            Offer a full suite of services, including pre-screening
                                            candidates,
                                            visa assistance, travel arrangements, and ongoing support for both the employee
                                            and
                                            employer.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="form-bg" style="background-image: url({{ asset('assets/images/background/3.jpg') }})"></div>
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="sub-title">
                                Grand White Star Co.,Ltd
                            </span>
                            <h2>
                                Employer Application
                            </h2>
                        </div>

                        <div class="contact-form wow fadeInLeft">
                            <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Name</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('company_name') is-invalid @enderror"
                                                placeholder="Company Name" name="company_name"
                                                value="{{ old('company_name') }}">
                                            @error('company_name')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Type of Company</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('company_type') is-invalid @enderror"
                                                placeholder="Type Of Company" name="company_type"
                                                value="{{ old('company_type') }}">
                                            @error('company_type')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Email
                                                Address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Company Email Address" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Phone
                                                Number</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Company Phone Number" name="phone"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Website</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('website') is-invalid @enderror"
                                                placeholder="Company Website" name="website" value="{{ old('website') }}">
                                            @error('website')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-6 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Location</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('location') is-invalid @enderror"
                                                placeholder="Company Location" name="location"
                                                value="{{ old('location') }}">
                                            @error('location')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Job Category</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('job_category') is-invalid @enderror"
                                                placeholder="Job Category" name="job_category"
                                                value="{{ old('job_category') }}">
                                            @error('job_category')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Age Limit: 20-40</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('age_limit') is-invalid @enderror"
                                                placeholder="Age Limit: 20-40" name="age_limit"
                                                value="{{ old('age_limit') }}">
                                            @error('age_limit')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">
                                                Educational Requirement
                                            </label>

                                            <input autocomplete="off" type="text"
                                                class="form-control @error('educational_requirement') is-invalid @enderror"
                                                name="educational_requirement"
                                                value="{{ old('educational_requirement') }}"
                                                placeholder="Educational Requirement">
                                            @error('educational_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">
                                                Working Experience
                                            </label>

                                            <input autocomplete="off" type="text"
                                                class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                                name="working_experience_requirement"
                                                value="{{ old('working_experience_requirement') }}"
                                                placeholder="Working Experience">
                                            @error('working_experience_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">
                                                Additional Requirement
                                            </label>

                                            <input autocomplete="off" type="text"
                                                class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                                name="other_additional_requirement"
                                                value="{{ old('other_additional_requirement') }}"
                                                placeholder="Additional Requirement">

                                            @error('other_additional_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">
                                                Estimate Salary
                                                Offer
                                            </label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                                placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                                value="{{ old('estimate_salary_offer') }}">
                                            @error('estimate_salary_offer')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Other Allowance</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('other_allowance') is-invalid @enderror"
                                                placeholder="Other Allowance" name="other_allowance"
                                                value="{{ old('other_allowance') }}">
                                            @error('other_allowance')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">
                                                Gender: M = 10, F = 5
                                            </label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('gender') is-invalid @enderror" name="gender"
                                                value="{{ old('gender') }}">
                                            @error('gender')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Interview Type</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('interview_type') is-invalid @enderror"
                                                placeholder="Interview Type: Online" name="interview_type"
                                                value="{{ old('interview_type') }}">
                                            @error('interview_type')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12">
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
        </div>
    </section>
@endsection
