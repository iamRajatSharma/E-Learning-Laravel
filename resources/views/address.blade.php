@extends('include/layout')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Address</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Address</li>
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

                                    <div id="change-password">
                                        <div class="profile-head">
                                            <h3>Add/Edit Address</h3>
                                        </div>

                                        @if (Session::has('message'))
                                            <div class="alert {{ Session::get('alert') }}">
                                                <strong>{{ Session::get('message') }}</strong>
                                            </div>
                                        @endif

                                        @if (count($address) > 0)
                                            @foreach ($address as $item)
                                                <form class="edit-profile" action="/updateAddress/{{ $item->id }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="">
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Address</label>
                                                            <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $item->address }}" name="address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">City</label>
                                                            <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $item->city }}" name="city">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">State</label>
                                                            <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $item->state }}" name="state">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Pincode</label>
                                                            <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $item->pincode }}" name="pincode">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                                        </div>
                                                        <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                            <button type="submit" class="btn">Save changes</button>
                                                            <button type="reset" class="btn-secondry">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endforeach
                                        @else
                                            <form class="edit-profile" action="/updateAddress" method="POST">
                                                @csrf
                                                <div class="">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Address</label>
                                                        <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                            <input class="form-control" type="text" name="address"
                                                                placeholder="Enter Address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">City</label>
                                                        <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                            <input class="form-control" type="text" name="city"
                                                                placeholder="Enter City Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">State</label>
                                                        <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                            <input class="form-control" type="text" name="state"
                                                                placeholder="Enter State">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Pincode</label>
                                                        <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                            <input class="form-control" type="text" name="pincode"
                                                                placeholder="Enter Pincode">
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
                                        @endif
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
