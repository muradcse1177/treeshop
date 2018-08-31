@extends('layout.app')
@section('title', 'Home')
@section('content')
    @include('web.homelayout.slide')

    <!--Home Product Layout Area Start-->
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
    <script>
        $(document).on("click", "#modalDataTransfer", function () {
            var productDetails = $(this).data('id');
            console.log(productDetails);
            var img_array = JSON.parse(productDetails.image);
            var modalBodyUpper = "";
            var inc = 1;
            for(var i=0; i<img_array.length; i++){
                if(inc == 1) {
                    var active = "active";
                    var activeL = "active";
                }
                else {
                    var active = "";
                    var activeL = "";
                }
                modalBodyUpper += '<div class="tab-pane fade show '+active+'" id="single-slide'+inc+'" role="tabpanel" aria-labelledby="single-slide-tab-'+inc+'">\n' +
                    '                <div class="single-product-img img-full">\n' +
                    '                <img src="'+img_array[i]+'" alt="">\n' +
                    '                </div>\n' +
                    '                </div>';
                if(img_array[i]) {
                    $("#pImage" + inc).attr("src", img_array[i]);
                }
                inc++;
            }
            $('#myTabContentUpper').html(modalBodyUpper);
            $('#pname').html("Name : "+productDetails.name);
            $('#pNewPrice').html("৳ "+ (productDetails.price-50));
            $('#pOldPrice').html("৳ "+productDetails.price);
            $('#pDescription').html(productDetails.description);

        });
    </script>
@endsection