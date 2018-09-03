@extends('layout.app')
@section('title', 'Home')
@section('content')
    @include('web.homelayout.slide')

    <div class="home-product-layout-area mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2">
                    @include('web.homelayout.category')
                    @include('web.homelayout.featured_product')
                    @include('web.homelayout.popular_flag')
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="product-layout">
                        @include('web.homelayout.single_product')
                        @include('web.homelayout.best_collection')
                        @include('web.homelayout.shop_in_store')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('web.homelayout.blog')
    @include('web.homelayout.brand')
    @include('web.homelayout.featured_area')
    @include('web.homelayout.home_modal')
    <!-- Modal Area End -->
</div>
@endsection
@section('footer')
    @parent
    <script src="/web/js/homeContent.js"></script>
    <link type="text/css" rel="stylesheet" href="/web/socialshare/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="/web/socialshare/jssocials-theme-flat.css" />
    <script type="text/javascript" src="/web/socialshare/jssocials.min.js"></script>
@endsection