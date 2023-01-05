@extends('include/layout')

@section('content')
    <style>
        .error {
            font-size: 14px;
            color: red;
            font-weight: 700;
            font-style: italic;
        }
    </style>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>

        <div class="page-banner contact-page section-sp2" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 m-b30">
                        <div class="bg-primary text-white contact-info-bx">
                            <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="widget widget_getintuch">
                                <ul>
                                    <li><i class="ti-location-pin"></i>75k Newcastle St. Ponte Vedra Beach, FL 309382 New
                                        York</li>
                                    <li><i class="ti-mobile"></i>0800-123456 (24/7 Support Line)</li>
                                    <li><i class="ti-email"></i>info@example.com</li>
                                </ul>
                            </div>
                            <h5 class="m-t0 m-b20">Follow Us</h5>
                            <ul class="list-inline contact-social-bx">
                                <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form class="contact-bx" action="/contact" method="post">
                            @csrf
                            <div class="ajax-message"></div>
                            <div class="heading-bx left">
                                <h2 class="title-head">Get In <span>Touch</span></h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of
                                    a page</p>
                            </div>

                            @if (Session::has('message'))
                                <div class="alert {{ Session::get('alert') }}" style="width: 100%;">
                                    <strong>{{ Session::get('message') }}</strong>
                                </div>
                            @endif

                            <div class="row placeani">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Your Name</label>
                                            <input name="name" type="text" class="form-control"
                                                value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Your Email Address</label>
                                            <input name="email" type="email" class="form-control"
                                                value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="error">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Your Phone</label>
                                            <input name="mobile" type="text" class="form-control"
                                                value="{{ old('mobile') }}">
                                            @if ($errors->has('mobile'))
                                                <span class="error">{{ $errors->first('mobile') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Subject</label>
                                            <input name="subject" type="text" class="form-control"
                                                value="{{ old('subject') }}">
                                            @if ($errors->has('subject'))
                                                <span class="error">{{ $errors->first('subject') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Type Message</label>
                                            <textarea name="message" rows="4" class="form-control"> {{ old('message') }}</textarea>
                                            @if ($errors->has('message'))
                                                <span class="error">{{ $errors->first('message') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button name="submit" type="submit" value="Submit" class="btn button-md"> Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
