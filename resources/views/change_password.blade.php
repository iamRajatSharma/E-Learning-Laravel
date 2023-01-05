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
    <di<div class="page-content bg-white">
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Profile</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Profile</li>
                </ul>
            </div>
        </div>
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                            @include('include/sidebar')
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 m-b30">

                            <div class="profile-content-bx">
                                <div class="tab-content">
                                    <div class="" id="change-password">
                                        <div class="profile-head">
                                            <h3>Change Password</h3>
                                        </div>
                                        <form class="edit-profile" action="/updatePassword" method="POST">
                                            @if (Session::has('message'))
                                                <div class="alert {{ Session::get('alert') }}" style="width: 100%;">
                                                    <strong>{{ Session::get('message') }}</strong>
                                                </div>
                                            @endif
                                            @csrf
                                            <div class="">
                                                <div class="form-group row">
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-9 ml-auto">
                                                        <h3>Password</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">New
                                                        Password</label>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                        <input class="form-control" type="password" name="pass1">
                                                        @if ($errors->has('pass1'))
                                                            <span class="error">{{ $errors->first('pass1') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Re Type
                                                        New Password</label>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                        <input class="form-control" type="password" name="pass2">
                                                        @if ($errors->has('pass1'))
                                                            <span class="error">{{ $errors->first('pass2') }}</span>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                                </div>
                                                <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                    <button type="submit" class="btn">Save changes</button>
                                                </div>
                                            </div>

                                        </form>
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
