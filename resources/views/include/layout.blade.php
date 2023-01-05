<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>EduChamp : Education HTML Template </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="/assets/css/assets.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="/assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="/assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="/assets/css/color/color-1.css">

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <header class="header rs-nav">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="/faq"><i class="fa fa-question-circle"></i>Ask
                                        a Question</a></li>
                                <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <li>
                                    <select class="header-lang-bx">
                                        <option data-icon="flag flag-uk">English UK</option>
                                        <option data-icon="flag flag-us">English US</option>
                                    </select>
                                </li>
                                @if (Auth::check())
                                    <li><a href="/profile">Profile</a></li>
                                    <li><a href="/logout">Logout</a></li>
                                @else
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Register</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <div class="menu-logo">
                            <a href="/"><img src="/assets/images/logo.png" alt=""></a>
                        </div>
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span> <span></span> <span></span>
                        </button>
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li><a href="/cart" class="btn-link"><i class="fa fa-shopping-cart"></i></a><span
                                            style="position: absolute; margin-top: -5px;">0</span>
                                    </li>
                                    <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link">
                                            <i class="fa fa-search"></i>
                                        </button></li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-search-bar">
                            <form action="courses" method="get">
                                <input name="name" type="text" class="form-control" placeholder="Type to search">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>

                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="/"><img src="/assets/images/logo.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li class="active"><a href="/about">About</a></li>
                                <li class="active"><a href="/faqs">Faq's</a></li>
                                <li class="active"><a href="/contact#contact">Contact Us</a></li>
                                <li class="add-mega-menu"><a href="javascript:;">Our
                                        Courses <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <ul>
                                                <li><a href="courses?name=all">All Courses</a></li>

                                                <li><a href="courses?name=<%= i.getName() %>"><%= i.getName() %></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="nav-social-link">
                                <a href="javascript:;"><i class="fa fa-facebook"></i></a> <a href="javascript:;"><i
                                        class="fa fa-google-plus"></i></a> <a href="javascript:;"><i
                                        class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer>
            <div class="footer-top">
                <div class="pt-exebar">
                    <div class="container">
                        <div class="d-flex align-items-stretch">
                            <div class="pt-logo mr-auto">
                                <a href="/"><img src="/assets/images/logo-white.png" alt="" /></a>
                            </div>
                            <div class="pt-social-link">
                                <ul class="list-inline m-a0">
                                    <li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="pt-btn-join">
                                <a href="#" class="btn ">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                            <div class="widget">
                                <h5 class="footer-title">Sign Up For A Newsletter</h5>
                                <p class="text-capitalize m-b20">Weekly Breaking news analysis
                                    and cutting edge advices on job searching.</p>
                                <div class="subscribe-form m-b20">
                                    <form class="subscription-form"
                                        action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php"
                                        method="post">
                                        <div class="ajax-message"></div>
                                        <div class="input-group">
                                            <input name="email" required="required" class="form-control"
                                                placeholder="Your Email Address" type="email"> <span
                                                class="input-group-btn">
                                                <button name="submit" value="Submit" type="submit" class="btn">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Company</h5>
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/faq">FAQs</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Get In Touch</h5>
                                        <ul>
                                            <li><a
                                                    href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a>
                                            </li>
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="/register">New Account</a></li>
                                            <!-- <li><a href="course-creator/login.jsp">Course-Creator</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                            <div class="widget widget_gallery gallery-grid-4">
                                <h5 class="footer-title">Our Gallery</h5>
                                <ul class="magnific-image">
                                    <li><a href="/assets/images/gallery/pic1.jpg" class="magnific-anchor"><img
                                                src="/assets/images/gallery/pic1.jpg" alt=""></a></li>
                                    <li><a href="/assets/images/gallery/pic2.jpg" class="magnific-anchor"><img
                                                src="/assets/images/gallery/pic2.jpg" alt=""></a></li>
                                    <li><a href="/assets/images/gallery/pic3.jpg" class="magnific-anchor"><img
                                                src="/assets/images/gallery/pic3.jpg" alt=""></a></li>
                                    <li><a href="/assets/images/gallery/pic4.jpg" class="magnific-anchor"><img
                                                src="/assets/images/gallery/pic4.jpg" alt=""></a></li>
                                    <li><a href="/assets/images/gallery/pic5.jpg" class="magnific-anchor"><img
                                                src="/assets/images/gallery/pic5.jpg" alt=""></a></li>
                                    <li><a href="/assets/images/gallery/pic6.jpg" class="magnific-anchor"><img
                                                src="/assets/images/gallery/pic6.jpg" alt=""></a></li>
                                    <li><a href="/assets/images/gallery/pic7.jpg" class="magnific-anchor"><img
                                                src="/assets/images/gallery/pic7.jpg" alt=""></a></li>
                                    <li><a href="/assets/images/gallery/pic8.jpg" class="magnific-anchor"><img
                                                src="/assets/images/gallery/pic8.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <button class="back-to-top fa fa-chevron-up"></button>
    </div>
    <!-- External JavaScripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="/assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="/assets/vendors/counter/waypoints-min.js"></script>
    <script src="/assets/vendors/counter/counterup.min.js"></script>
    <script src="/assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="/assets/vendors/masonry/masonry.js"></script>
    <script src="/assets/vendors/masonry/filter.js"></script>
    <script src="/assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="/assets/js/functions.js"></script>
    <script src="/assets/js/contact.js"></script>
    <script src='/assets/vendors/switcher/switcher.js'></script>
</body>


</html>
