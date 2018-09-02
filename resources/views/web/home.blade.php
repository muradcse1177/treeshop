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

    <script>

        if($.cookie('__xxxxctotal__')){
            var cart_quantity = $.cookie('__xxxxctotal__');
            var cart_amount = $.cookie('__xxxxcAmtotal__');
            $(".cart-quantity").text(cart_quantity);
            $(".pTotalAmount").text(cart_amount);
        }
        if($.cookie('__xxxxpd__')){
            productDet = JSON.parse($.cookie('__xxxxpd__'));
            var cartPList = '<ul>';
            var proLoop = productDet.products;
            var totalPrice= 0;
            var ext = '<p class="cart-subtotal"><strong>Subtotal:</strong> <span class="float-right"><b>৳-</b><span id="totalPrice">0</span></span></p>\n' +
                '                                <p class="cart-btn">\n' +
                '                                    <a href="cart.html">View cart</a>\n' +
                '                                    <a href="checkout.html">Checkout</a>\n' +
                '                                </p>';

            for(var i=0; i<proLoop.length; i++){
                cartPList += ' <li class="single-cart-item" id="li'+proLoop[i]["id"]+'">\n' +
                    '                                        <div class="cart-img">\n' +
                    '                                            <a href="single-product.html"><img src="'+proLoop[i]["feature_image"]+'" alt=""></a>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="cart-content">\n' +
                    '                                            <h5 class="product-name"><a href="single-product.html">'+proLoop[i]["name"]+'</a></h5>\n' +
                    '                                            <span class="cart-price">Item('+proLoop[i]["pNumber"]+')<b>  ৳-</b><span>'+proLoop[i]["price"]+'</span></span></span>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="cart-remove"  onclick="removeList(this.id,i)" id="'+proLoop[i]["id"]+'">\n' +
                    '                                            <a title="Remove" href="#"><i class="fa fa-times"></i></a>\n' +
                    '                                        </div>\n' +
                    '                                    </li>';
                totalPrice =totalPrice+ proLoop[i]["price"];
            }
            cartPList += '</ul>';
            cartPList += ext;
            $('.cart-dropdown').html(cartPList);
            $('#totalPrice').text(totalPrice);
        }

        function productDetailsOnclick(productDetails){

            $.cookie.json = true;
            var productDetailsCoekie = {
                "id":productDetails.id,
                "feature_image": productDetails.feature_image,
                "price": productDetails.price,
                "name": productDetails.name,
                "pNumber": 1,
            };
            var cart_quantity = parseInt($(".cart-quantity").text());
            var cart_amount = parseInt($(".pTotalAmount").text());
            cart_quantity = cart_quantity+1;
            cart_amount = cart_amount+ productDetails.price;
            $.cookie('__xxxxctotal__', cart_quantity,{ expires: 365 });
            $.cookie('__xxxxcAmtotal__', cart_amount,{ expires: 365 });
            $(".cart-quantity").text(cart_quantity);
            $(".pTotalAmount").text(cart_amount);

            if($.cookie('__xxxxpd__')){
                productDet = $.cookie('__xxxxpd__');
                var cookeiCheckLoop = productDet.products;
                var ids = [];
                var t = 0;
                for(var m=0; m<cookeiCheckLoop.length; m++){
                    ids[t] = cookeiCheckLoop[m]['id'];
                    t++;
                }

                if(ids.toString().indexOf(productDetails.id) != -1) {
                    for(var k =0; k<cookeiCheckLoop.length; k++ ){
                        if(cookeiCheckLoop[k]['id'] == productDetails.id){
                            var productDetailsCoekie = {
                                "id":productDetails.id,
                                "feature_image": productDetails.feature_image,
                                "price": cookeiCheckLoop[k]['price'] + productDetails.price,
                                "name": productDetails.name,
                                "pNumber": cookeiCheckLoop[k]['pNumber'] +1,
                            };
                        }
                    }
                }
                var currentUserCartDetails = $.cookie('__xxxxpd__');
                var obj = JSON.parse(JSON.stringify(currentUserCartDetails));
                for(var n=0; n<obj.products.length; n++){
                    if(obj.products[n]['id'] == productDetails.id){
                        obj.products.splice(n, 1);
                    }
                }
                obj['products'].push(productDetailsCoekie);
                jsonStrProducts = JSON.parse(JSON.stringify(obj));
                $.cookie('__xxxxpd__', jsonStrProducts,{ expires: 365 });
                productDet = $.cookie('__xxxxpd__');
                var cartPList = '<ul>';
                var proLoop = productDet.products;
                var totalPrice= 0;
                var ext = '<p class="cart-subtotal"><strong>Subtotal:</strong> <span class="float-right"><b>৳-</b><span id="totalPrice">0</span></span></p>\n' +
                    '                                <p class="cart-btn">\n' +
                    '                                    <a href="cart.html">View cart</a>\n' +
                    '                                    <a href="checkout.html">Checkout</a>\n' +
                    '                                </p>';
                for(var i=0; i<proLoop.length; i++){
                    cartPList += ' <li class="single-cart-item" id="li'+proLoop[i]["id"]+'">\n' +
                        '                                        <div class="cart-img">\n' +
                        '                                            <a href="single-product.html"><img src="'+proLoop[i]["feature_image"]+'" alt=""></a>\n' +
                        '                                        </div>\n' +
                        '                                        <div class="cart-content">\n' +
                        '                                            <h5 class="product-name"><a href="single-product.html">'+proLoop[i]["name"]+'</a></h5>\n' +
                        '                                            <span class="cart-price">Item('+proLoop[i]["pNumber"]+')<b>৳-</b><span>'+proLoop[i]["price"]+'</span></span></span>\n' +
                        '                                        </div>\n' +
                        '                                        <div class="cart-remove" onclick="removeList(i,this.id)" id="'+proLoop[i]["id"]+'">\n' +
                        '                                            <a title="Remove" href="#"><i class="fa fa-times"></i></a>\n' +
                        '                                        </div>\n' +
                        '                                    </li>';
                    totalPrice =totalPrice+ proLoop[i]["price"];
                }
                cartPList += '</ul>';
                cartPList += ext;
                $('.cart-dropdown').html(cartPList);
                $('#totalPrice').text(totalPrice);
            }
            else{
                var currentUserCartDetails = {"products" : [productDetailsCoekie]};
                $.cookie('__xxxxpd__', currentUserCartDetails,{ expires: 365 });
                productDet = $.cookie('__xxxxpd__');
                var cartPList = '<ul>';
                var proLoop = productDet.products;
                var totalPrice= 0;
                var ext = '<p class="cart-subtotal"><strong>Subtotal:</strong> <span class="float-right"><b>৳-</b><span id="totalPrice">0</span></span></p>\n' +
                    '                                <p class="cart-btn">\n' +
                    '                                    <a href="cart.html">View cart</a>\n' +
                    '                                    <a href="checkout.html">Checkout</a>\n' +
                    '                                </p>';
                for(var i=0; i<proLoop.length; i++){
                    cartPList += ' <li class="single-cart-item" id="li'+proLoop[i]["id"]+'">\n' +
                        '                                        <div class="cart-img">\n' +
                        '                                            <a href="single-product.html"><img src="'+proLoop[i]["feature_image"]+'" alt=""></a>\n' +
                        '                                        </div>\n' +
                        '                                        <div class="cart-content">\n' +
                        '                                            <h5 class="product-name"><a href="single-product.html">'+proLoop[i]["name"]+'</a></h5>\n' +
                        '                                            <span class="cart-price">Item('+proLoop[i]["pNumber"]+')<b>৳-</b><span>'+proLoop[i]["price"]+'</span></span></span>\n' +
                        '                                        </div>\n' +
                        '                                        <div class="cart-remove" onclick="removeList(i,this.id)" id="'+proLoop[i]["id"]+'">\n' +
                        '                                            <a title="Remove" href="#"><i class="fa fa-times"></i></a>\n' +
                        '                                        </div>\n' +
                        '                                    </li>';
                    totalPrice =totalPrice+ proLoop[i]["price"];
                }
                cartPList += '</ul>';
                cartPList += ext;
                $('.cart-dropdown').html(cartPList);
                $('#totalPrice').text(totalPrice);
            }
        }

        function removeList(id,a) {
            alert(id);
            $("#li"+id).hide();
            var currentUserCartDetails = $.cookie('__xxxxpd__');
            var obj = JSON.parse(currentUserCartDetails);
            obj.products.splice(a, 1);
            // $.cookie('__xxxxpd__', obj,{ expires: 365 });
            console.log(obj);
        }
    </script>
@endsection