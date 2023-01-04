@extends("include/layout")

@section("content")

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Profile</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Profile</li>
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
                        @include("include/sidebar")
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

                                                <li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                                                    <div class="cours-bx">
                                                        <div class="action-box">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="info-bx text-center">
                                                            <h5><a href="#"><%= i.getCourse_name() %></a></h5>
                                                            <span><%= i.getCourse_cat() %></span>
                                                        </div>
                                                        <div class="cours-more-info">
                                                            <div class="review">
                                                                <a href="video?id=<%= i.getCourse_id() %>"
                                                                    class="btn btn-danger">View</a>
                                                            </div>
                                                            <div class="price">
                                                                <del><i class="fa fa-inr"></i><%= i.getPrice() %></del>
                                                                <h5><i class="fa fa-inr"></i><%= i.getDis() %></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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