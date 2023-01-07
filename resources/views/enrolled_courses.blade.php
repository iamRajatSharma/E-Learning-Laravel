@extends('include/layout')

@section('content')
    <style>
        .action-box img,
        .ttr-post-media img {
            height: 160px;
        }

        .course-detail-bx .cours-more-info .price,
        .cours-more-info .review {
            padding: 8px 20px;
            width: 100%;
            text-align: center;
        }

        .courses-filter .action-card {
            margin-bottom: 30px;
            list-style-type: none;
        }
    </style>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Enrolled Courses</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Enrolled Courses</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- inner page banner END -->
        <div class="content-block">
            <!-- About Us -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                            @include('include/sidebar')
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                            <div class="profile-content-bx">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="courses">
                                        <div class="profile-head">
                                            <h3>My Courses</h3>
                                        </div>
                                        <div class="courses-filter">
                                            <div class="clearfix">
                                                <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                                                    @if (count($data) > 0)
                                                        @foreach ($data as $item)
                                                            <li
                                                                class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                                                                <div class="cours-bx">
                                                                    <div class="action-box">
                                                                        <img src="{{ $item->img }}" alt="">
                                                                    </div>
                                                                    <div class="info-bx text-center">
                                                                        <h5><a href="#">{{ $item->course_name }}</a>
                                                                        </h5>
                                                                        <span>{{ $item->course_category }}</span>
                                                                    </div>
                                                                    <div class="cours-more-info">
                                                                        <div class="review">
                                                                            <a href="video/{{ $item->id }}"
                                                                                class="btn btn-danger">View Video</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <div class="alert alert-danger text-center" style="width: 100%;">
                                                            <strong>NO COURSER FOUND</strong>
                                                        </div>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>

@endsection
