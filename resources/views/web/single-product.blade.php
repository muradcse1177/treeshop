@extends('layout.app')
@section('title', 'Single Product')
@section('content')
    <div class="breadcrumb-one mb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-img">
                        <img src="/web/img/page-banner/product-banner.jpg" alt="">
                    </div>
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active">Single Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('web.singleproductlayout.productdetails')
    @include('web.singleproductlayout.relatedproducts')
    @include('web.homelayout.brand')
    @include('web.homelayout.home_modal')
@endsection
@section('footer')
    @parent
    <script src="/web/js/homeContent.js"></script>
    <link type="text/css" rel="stylesheet" href="/web/socialshare/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="/web/socialshare/jssocials-theme-flat.css" />
    <script type="text/javascript" src="/web/socialshare/jssocials.min.js"></script>
@endsection