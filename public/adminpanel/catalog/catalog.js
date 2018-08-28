$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#productCategory").on("change", function(evt) {
        var productCategory = $('#productCategory').find(":selected").val();
        $.ajax({
            url: '/selectSubcategory',
            type: 'POST',
            data:{productCategory: productCategory},
            success: function (response) {
                data = response.data;
                $('#productSubcategory').find('option').remove();
                $('#productSubcategory').append($('<option>', {
                    value: "", text: "Select Subcategory"
                }));
                for (i = 0; i < data.length; i++) {
                    $('#productSubcategory').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
            }
        });
    });
    $("#addProductImage").click(function() {
        var lastField = $("#buildyourform div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
        fieldWrapper.data("idx", intId);
        var fName = $(" <div class=\"col-sm-10\">\n" +
            "                    <input type=\"file\" class=\"form-control\" name=\"image[]\" required/></div>");
        var removeButton = $("<div class=\"col-sm-2\"><button  type=\"button\" class=\"btn btn-danger  w-md m-rb-5\"><span class=\"glyphicon glyphicon-remove\"></span>Remove</button></div>");
        removeButton.click(function() {
            $(this).parent().remove();
        });
        fieldWrapper.append(fName);
        fieldWrapper.append(removeButton);
        $("#buildyourform").append(fieldWrapper);
    });
});
function categoryBtnShowHide() {
    $("#addCategoryButton").click(function(){
        $("#categoryForm").show();
        $("#cancelCategoryButton").show();
        $("#addCategoryButton").hide();
    });
    $("#cancelCategoryButton").click(function(){
        $("#categoryForm").hide();
        $("#cancelCategoryButton").hide();
        $("#addCategoryButton").show();
    });
}
function subcategoryBtnShowHide() {
    $("#addSubCategoryButton").click(function(){
        $("#subcategoryForm").show();
        $("#cancelSubCategoryButton").show();
        $("#addSubCategoryButton").hide();
    });
    $("#cancelSubCategoryButton").click(function(){
        $("#subcategoryForm").hide();
        $("#cancelSubCategoryButton").hide();
        $("#addSubCategoryButton").show();
    });
}
function productBtnShowHide() {
    $("#addProductButton").click(function(){
        $("#productForm").show();
        $("#cancelProductButton").show();
        $("#addProductButton").hide();
        $("#productTable").hide();
    });
    $("#cancelProductButton").click(function(){
        $("#productForm").hide();
        $("#cancelProductButton").hide();
        $("#addProductButton").show();
        $("#productTable").show();
    });
}
function bannerBtnShowHide() {
    $("#addBannerButton").click(function(){
        $("#bannerForm").show();
        $("#cancelBannerButton").show();
        $("#addBannerButton").hide();
        $("#bannerTable").hide();
    });
    $("#cancelBannerButton").click(function(){
        $("#bannerForm").hide();
        $("#cancelBannerButton").hide();
        $("#addBannerButton").show();
        $("#bannerTable").show();
    });
}