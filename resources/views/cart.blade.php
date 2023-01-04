@extends('include/layout')

@section('content')
<style>
    .price{
        float: right;
    }
</style>
    <div class="page-content bg-white">
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
                <div class="row">
                    @if (count($cart) > 0)
                        <div class="col-lg-9 col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Image</th>
                                        <th>Course-Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    @php
                                        $total = 1;
                                    @endphp

                                    @foreach ($cart as $item)
                                        <tr>
                                            <td>{{ $total }}</td>
                                            <td><a href="/course_details/{{ $item->product_id }}"><img style="width: 100px;"
                                                        src="{{ $item->image }}"></a></td>
                                            <td>{{ $item->product_title }}</td>
                                            <td>{{ $item->category }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <form action="deleteCartItem" method="post">
                                                    <input type="hidden" name="delId" value="<%= i.getProduct_id() %>">
                                                    <button class="btn btn-primary">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @php
                                            $total++;
                                        @endphp
                                    @endforeach
                                </tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkout">
                                <div><b>Total Price : </b> <span class="price"><i class="fa fa-inr"></i> {{ $cartTotal }}</span></div>
                                <div class="mt-2"><b>Shipping Charge :</b> <span class="price"><i class="fa fa-inr"></i> 0</span></div>
                                <div class="mt-2"><b>Total Price :</b> <span class="price"><i class="fa fa-inr"></i>{{ $cartTotal }}</span></div><br>
                                <hr><a href="/checkout" class="btn btn-danger btn-block">Checkout</a>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12 text-center">
                            <div class="alert alert-danger">
                                <strong>NO PRODUCT AVAILABLE</strong>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
