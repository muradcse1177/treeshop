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
$(function() {
    var url = window.location.href;
    var text = "Some text to share";
    $("#shareIcons").jsSocials({
        url: url,
        text: text,
        showLabel: false,
        showCount: false,
        shares: ["facebook","twitter", "googleplus", "linkedin", "pinterest","email", "whatsapp", "telegram", "viber", "messenger"]
    });

});

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
        '                                    <a href="/cart">View cart</a>\n' +
        '                                    <a href="/checkout">Checkout</a>\n' +
        '                                </p>';

    for(var i=0; i<proLoop.length; i++){
        cartPList += ' <li class="single-cart-item" id="li'+proLoop[i]["id"]+'">\n' +
            '                                        <div class="cart-img">\n' +
            '                                            <a href="/single-product/'+proLoop[i]["id"]+'"><img src="'+proLoop[i]["feature_image"]+'" alt=""></a>\n' +
            '                                        </div>\n' +
            '                                        <div class="cart-content">\n' +
            '                                            <h5 class="product-name"><a href="/single-product/'+proLoop[i]["id"]+'">'+proLoop[i]["name"]+'</a></h5>\n' +
            '                                            <span class="cart-price">Item('+proLoop[i]["pNumber"]+')<b>  ৳-</b><span>'+proLoop[i]["price"]+'</span></span></span>\n' +
            '                                        </div>\n' +
            '                                        <div class="cart-remove"  onclick="removeListReload(i,this.id)" id="'+proLoop[i]["id"]+'">\n' +
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
                '                                            <a href="/single-product/'+proLoop[i]["id"]+'"><img src="'+proLoop[i]["feature_image"]+'" alt=""></a>\n' +
                '                                        </div>\n' +
                '                                        <div class="cart-content">\n' +
                '                                            <h5 class="product-name"><a href="/single-product/'+proLoop[i]["id"]+'">'+proLoop[i]["name"]+'</a></h5>\n' +
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
                '                                            <a href="/single-product/'+proLoop[i]["id"]+'"><img src="'+proLoop[i]["feature_image"]+'" alt=""></a>\n' +
                '                                        </div>\n' +
                '                                        <div class="cart-content">\n' +
                '                                            <h5 class="product-name"><a href="/single-product/'+proLoop[i]["id"]+'">'+proLoop[i]["name"]+'</a></h5>\n' +
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
function removeList(a,id) {
    $("#li"+id).hide();
    var currentUserCartDetails = $.cookie('__xxxxpd__');
    for(var k=0; k<currentUserCartDetails.products.length; k++){
        if(currentUserCartDetails.products[k]['id'] == id){
            var price = currentUserCartDetails.products[k]['price'];
            currentUserCartDetails.products.splice(k, 1);
        }
    }
    var cart_quantity = parseInt($(".cart-quantity").text());
    var cart_amount = parseInt($(".pTotalAmount").text());
    var total_price = parseInt($("#totalPrice").text());
    cart_quantity = cart_quantity-1;
    cart_amount = cart_amount- price;
    total_price = total_price- price;
    $.cookie('__xxxxctotal__', cart_quantity,{ expires: 365 });
    $.cookie('__xxxxcAmtotal__', cart_amount,{ expires: 365 });
    $(".cart-quantity").text(cart_quantity);
    $(".pTotalAmount").text(cart_amount);
    $('#totalPrice').text(total_price);

    jsonStrProducts = JSON.parse(JSON.stringify(currentUserCartDetails));
    $.removeCookie('__xxxxpd__', { path: '/' });
    $.cookie('__xxxxpd__', jsonStrProducts,{ expires: 365 });
    productDet = $.cookie('__xxxxpd__');
}
function removeListReload(a,id,price) {
    $("#li"+id).hide();
    var currentUserCartDetails = $.cookie('__xxxxpd__');
    var obj = JSON.parse(currentUserCartDetails);
    for(var k=0; k<obj.products.length; k++){
        if(obj.products[k]['id'] == id){
            var price = obj.products[k]['price'];
            obj.products.splice(k, 1);
        }
    }
    var cart_quantity = parseInt($(".cart-quantity").text());
    var cart_amount = parseInt($(".pTotalAmount").text());
    var total_price = parseInt($("#totalPrice").text());
    cart_quantity = cart_quantity-1;
    cart_amount = cart_amount- price;
    total_price = total_price- price;
    $.cookie('__xxxxctotal__', cart_quantity,{ expires: 365 });
    $.cookie('__xxxxcAmtotal__', cart_amount,{ expires: 365 });
    $(".cart-quantity").text(cart_quantity);
    $(".pTotalAmount").text(cart_amount);
    $('#totalPrice').text(total_price);

    jsonStrProducts = JSON.parse(JSON.stringify(obj));
    productDeta = $.cookie('__xxxxpd__');
    $.cookie('__xxxxpd__', JSON.stringify(jsonStrProducts),{ expires: 365 });
}