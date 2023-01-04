@extends('include/layout')

@section('content')
    <div class="page-content bg-white">

        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">{{ $course->title }}</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>{{ $course->title }}</li>
                </ul>
            </div>
        </div>

        <div class="content-block">
            <!-- About Us -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row d-flex flex-row-reverse">
                        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">

                            <div class="course-detail-bx">
                                <div class="course-price">
                                    <del><i class="fa fa-inr mr-2"></i>{{ $course->price }}</del>
                                    <h4 class="price"><i class="fa fa-inr mr-2"></i>{{ $course->dis }}</h4>
                                </div>
                                <div class="course-buy-now text-center">
                                    <form action="/saveCart" method="post">
                                        @csrf
                                        <input type="hidden" name="pro_id" value="{{ $course->id }}">
                                        <input type="hidden" name=pro_title value="{{ $course->title }}">
                                        <input type="hidden" name="price" value="{{ $course->dis }}">
                                        <input type="hidden" name="img" value="{{ $course->image }}">
                                        <input type="hidden" name="cat" value="{{ $course->category }}">
                                        <button class="btn radius-xl text-uppercase">Add To Cart</button>
                                    </form>
                                </div>
                                <div class="teacher-bx">
                                    <div class="teacher-info">
                                        <div class="teacher-thumb">
                                            <img src="assets/images/testimonials/pic1.jpg" alt="" />
                                        </div>
                                        <div class="teacher-name">
                                            <h5>Hinata Hyuga</h5>
                                            <span>Science Teacher</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cours-more-info">
                                    <div class="review">
                                        <span>{{ $course->review }} Review</span>
                                        <ul class="cours-star">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price categories">
                                        <span>Categories</span>
                                        <h5 class="text-primary">{{ $course->category }}</h5>
                                    </div>
                                </div>
                                <div class="course-info-list scroll-page">
                                    <ul class="navbar">
                                        <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
                                        <li><a class="nav-link" href="#curriculum"><i
                                                    class="ti-bookmark-alt"></i>Curriculum</a></li>
                                        <li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <div class="courses-post">
                                <div class="ttr-post-media media-effect">
                                    <a href="#"><img src="{{ $course->image }}" alt=""></a>
                                </div>
                                <div class="ttr-post-info">
                                    <div class="ttr-post-title ">
                                        <h2 class="post-title">{{ $course->title }}
                                            <hr>
                                        </h2>
                                    </div>
                                    <div class="ttr-post-text">
                                        <p class="text-justify">{{ $course->about }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courese-overview" id="overview">
                                <h4>Overview</h4>
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="course-features">
                                            <li><i class="ti-book"></i> <span class="label">Lectures</span> <span
                                                    class="value">{{ $course->lecture }}</span></li>
                                            <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span
                                                    class="value">{{ $course->quiz }}</span></li>
                                            <li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span
                                                    class="value">{{ $course->skill }}</span></li>
                                            <li><i class="ti-smallcap"></i> <span class="label">Language</span> <span
                                                    class="value">{{ $course->language }}</span></li>
                                            <li><i class="ti-user"></i> <span class="label">Students</span> <span
                                                    class="value">{{ $course->total_enroll }}</span></li>
                                            <li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span
                                                    class="value">{{ $course->assesment }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 col-lg-8">
                                        <h5 class="m-b5">Course Description</h5>
                                        <p class="text-justify">{{ $course->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="" id="reviews">
                                <h4>Reviews</h4>

                                <div class="review-bx">
                                    <div class="all-review">
                                        <h2 class="rating-type">3</h2>
                                        <ul class="cours-star">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>3 Rating</span>
                                    </div>
                                    <div class="review-bar">
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>5 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:90%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>150</div>
                                            </div>
                                        </div>
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>4 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:70%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>140</div>
                                            </div>
                                        </div>
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>3 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:50%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>120</div>
                                            </div>
                                        </div>
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>2 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:40%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>110</div>
                                            </div>
                                        </div>
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>1 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:20%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>80</div>
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
