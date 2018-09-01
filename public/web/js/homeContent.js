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