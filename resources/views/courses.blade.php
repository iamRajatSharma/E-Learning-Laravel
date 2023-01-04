@extends("include/layout")

@section("content")

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white"><%= request.getParameter("name") %> Courses</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li><%= request.getParameter("name") %> Courses</li>
            </ul>
        </div>
    </div>

    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <% 
							List<Course> allCourses = (List) request.getAttribute("allcourses");
							if(allCourses.size()>0){
							for(Course data: allCourses){
							%>
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        <img src="<%= data.getImage() %>" alt="">
                                        <a href="course-details?id=<%= data.getId() %>" class="btn">Read More</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="course-details?id=<%= data.getId() %>"><%= data.getTitle() %></a>
                                        </h5>
                                        <span><%= data.getCategory() %></span>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span><%= data.getReview() %> Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del><i class="fa fa-inr mr-1"></i><%= data.getPrice() %></del>
                                            <h5><i class="fa fa-inr mr-1"></i><%= data.getDis() %></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <% } } else{ %>
                            <div class="col-lg-12 text-center">
                                <div class="text-center alert alert-danger">
                                    <strong>NO COURSE FOUND</strong>
                                </div>
                            </div>
                            <% } %>
                        </div>
                    </div>

                    <!-- <div class="col-lg-12 m-b20">
									<div class="pagination-bx rounded-sm gray clearfix">
										<ul class="pagination">
											<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
										</ul>
									</div>
								</div> -->

                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>

@endsection