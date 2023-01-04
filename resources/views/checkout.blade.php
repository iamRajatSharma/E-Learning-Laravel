@extends('include/layout')

@section('content')
    <style>
        .price {
            float: right;
        }
    </style>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Checkout</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
        <div class="page-banner contact-page section-sp2" id="contact">
            <div class="container">
                <form action="pay" method="POST">
                    <div class="row">

                        <div class="col-lg-9 col-md-9">
                            <div class="card" style="padding-bottom: 8px;">
                                <div class="card-header">
                                    <b>Billing Address / Shipping Address</b>
                                </div>
                                @if (count($address) > 0)
                                    @foreach ($address as $item)
                                        <div class="card-body">
                                            <input type="hidden" name="adr_id" value="{{ $item->id }}">
                                            <input type="hidden" name="u_name" value="{{ $item->name }}">
                                            Name : {{ ucfirst($item->name) }}<br />
                                            Email : {{ $item->email }}<br />
                                            Address :
                                            {{ $item->address }}, {{ $item->city }}, {{ $item->city }},
                                            {{ $item->pincode }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkout">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Billing Details</strong>
                                    </div>
                                    <div class="card-body">
                                        <div><b>Total Price : </b> <span class="price"><i class="fa fa-inr"></i>
                                                {{ $cartTotal }}</span></div>
                                        <div><b>Shipping Charge :</b> <span class="price"><i class="fa fa-inr"></i>
                                                0</span></div>
                                        <div class="mt-2"><b>Grand Price :</b> <span class="price"><i
                                                    class="fa fa-inr"></i>
                                                {{ $cartTotal }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <hr>
                            <button name="submit" class="btn btn-danger">Pay Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- inner page banner END -->
    </div>
@endsection
