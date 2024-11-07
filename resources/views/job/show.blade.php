@extends('layouts.main')
@section('title', 'Jobs')
@section('content')
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
                    Jobs Available In
                    <span class="color3">
                        {{ $country->country ?? '' }}
                    </span>
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

@endsection
