@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="countries-section">
        <div class="auto-container">
            <div class="bg-layer"></div>
            <div class="sec-title text-center light">
                <span class="sub-title">
                    {{ $category->title ?? '' }}
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
