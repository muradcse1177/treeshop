@extends('layout.app')
@section('title', 'Home')
@section('content')
    <div class="breadcrumb-tow mb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-title">
                        <h1>Shopping Cart</h1>
                    </div>
                    <div class="breadcrumb-content breadcrumb-content-tow">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Shopping-cart-area mb-110">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="plantmore-product-remove">remove</th>
                                    <th class="plantmore-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-quantity">Quantity</th>
                                    <th class="plantmore-product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody id="cartListTable">

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </div>
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Subtotal <span class="subtotal">৳<span id="finalAmnt1">0</span></span></li>
                                        <li>Total <span class="subtotal">৳<span  id="finalAmnt2">0</span></span></li>
                                    </ul>
                                    <a href="#">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @parent
    <script src="/web/js/homeContent.js"></script>
    <link type="text/css" rel="stylesheet" href="/web/socialshare/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="/web/socialshare/jssocials-theme-flat.css" />
    <script type="text/javascript" src="/web/socialshare/jssocials.min.js"></script>
    <script>
        if($.cookie('__xxxxpd__')) {
            var productDet = JSON.parse($.cookie('__xxxxpd__'));
            var productarr = productDet.products;
            var rowEle = "";
            var totalPrice = 0;
            for(var p=0; p<productarr.length; p++){;
                rowEle +=' <tr>\n' +
                    '                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>\n' +
                    '                                    <td class="plantmore-product-thumbnail" ><a href="/single-product/'+productarr[p]["id"]+'"><img style="height:90px; width:90px" src="'+productarr[p]["feature_image"]+'" alt=""></a></td>\n' +
                    '                                    <td class="plantmore-product-name"><a href="/single-product/'+productarr[p]["id"]+'">'+productarr[p]["name"]+'</a></td>\n' +
                    '                                    <td class="plantmore-product-price"><span class="amount">৳'+productarr[p]["price"]/productarr[p]["pNumber"]+'</span></td>\n' +
                    '                                    <td class="plantmore-product-quantity">\n' +
                    '                                        <input value="'+productarr[p]["pNumber"]+'" min="1"  name="name[]" id="'+productarr[p]["id"]+'" type="number"><div style="display: none;" id="pr'+productarr[p]["id"]+'">'+productarr[p]["price"]+'</div>\n' +
                    '                                    </td>\n' +
                    '                                    <td class="product-subtotal"><span class="amount">৳<span id="am'+productarr[p]["id"]+'">'+productarr[p]["price"]+'</span></span></td>\n' +
                    '                                </tr>';
                totalPrice =totalPrice+ productarr[p]["price"];
            }
            $('#cartListTable').html(rowEle);
            $('#finalAmnt1').html(totalPrice);
            $('#finalAmnt2').html(totalPrice);
        }
        $(document).on('change','input[name^="name"]',function() {
           var quantity =  parseInt(this.value);
           var price =  parseInt($('#pr'+this.id).text());
           var amount = quantity * price;
            $('#am'+this.id).text(amount);
            var totalPrice1 = (parseInt($("#finalAmnt1").text()) + amount) - price ;
            var totalPrice2 = (parseInt($("#finalAmnt2").text()) + amount) - price;
            // console.log(totalPrice1);
            $('#finalAmnt1').text(totalPrice1);
            $('#finalAmnt2').text(totalPrice2);
        });

    </script>
@endsection