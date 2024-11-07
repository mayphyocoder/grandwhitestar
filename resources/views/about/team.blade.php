@extends('layouts.main')
@section('title', 'Team')
@section('content')
    <section class="why-choose-us-two">
        <div class="bg-layer"></div>
        <div class="auto-container">

            <div class="sec-title text-center">
                <span class="sub-title">
                    Grand White Star Co.,Ltd
                </span>
                <h2>Meet Our Expert Team.</h2>
            </div>

            <div class="row" hidden>
                @foreach ($teams as $team)
                    <div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ $team->photo }}" alt="">
                                </figure>
                                <span class="share-icon fa fa-share-alt"></span>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="info-box">
                                <h4 class="name">
                                    <a href="javascript::void(0)">
                                        {{ $team->name ?? '' }}
                                    </a>
                                </h4>
                                <span class="designation">
                                    {{ $team->position ?? '' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
