@extends('adminpanel.layout.app')
@section('title', 'Products')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1></h1>
                    <button id="addProductButton" type="button" class="btn btn-base w-md m-rb-5"><span class="glyphicon glyphicon-plus"></span>@if(isset($editdata->action)){{'Edit'}}  @else{{"Add New"}} @endif Product</button>
                    <button id="cancelProductButton"  style="display: none;" type="button" class="btn btn-base w-md m-rb-5"><span class="glyphicon glyphicon-remove"></span>Cancel New Product</button>
                    <ol class="breadcrumb">
                        <li><a href="/home"><i class="pe-7s-home"></i> Dashboard</a></li>
                        <li><a href="#">Catalog</a></li>
                        <li class="active">Products</li>
                    </ol>
                </div>
            </div>
            <div id="productForm" class="row" style="@if(isset($editdata['action']) != 'edit') {{'display: none'}} @endif">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add New Product</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            {{ Form::open(array('url' => '/product/add', 'method' => 'post','files'=>'true' )) }}
                            @include('/adminpanel/form/product')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
            @include('/adminpanel/layout/msgshow')
            @if(isset($editdata['action']) != 'edit')
                <div class="row" id="productTable">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Product List</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="categoryTable" class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Model</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data['product'] as $product)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <?php $image = json_decode($product->image,true); ?>
                                                <td align="center"><img src="{{ $image[0]}}" alt="Product Image" height="50" width="60"></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->model}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->discount}}</td>
                                                <td>@if($product->status ==1 ){{'Active'}} @else {{"Inactive"}}@endif</td>
                                                <td><a href="/product/edit/{{$product->id}}/{{$product->category_id}}" data-toggle="tooltip" title="Edit"> <span class="glyphicon glyphicon-edit"></span> </a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
@section('footer')
    @parent
    <script src="/adminpanel/catalog/catalog.js"></script>
    <script src="/adminpanel/assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="/adminpanel/assets/plugins/ckeditor/ckeditor-active.js"></script>
    <script src="/adminpanel/assets/plugins/datatables/dataTables-active.js"></script>
    <script>
        productBtnShowHide();
        $("#productCategory").val('{{@$editdata['product'][0]->category_id}}');
        $("#productSubcategory").val('{{@$editdata['product'][0]->subcategory_id}}');
        $("#name").val('{{@$editdata['product'][0]->name}}');
        $("#status").val('{{@$editdata['product'][0]->status}}');
        $("#editor1").html('{{@$editdata['product'][0]->description}}');
        $("#model").val('{{@$editdata['product'][0]->model}}');
        $("#tag").val('{{@$editdata['product'][0]->tag}}');
        $("#location").val('{{@$editdata['product'][0]->location}}');
        $("#price").val('{{@$editdata['product'][0]->price}}');
        $("#quantity").val('{{@$editdata['product'][0]->quantity}}');
        $("#tax").val('{{@$editdata['product'][0]->tax}}');
        $("#dateAvailable").val('{{@$editdata['product'][0]->dateAvailable}}');
        $("#weight").val('{{@$editdata['product'][0]->weight}}');
        $("#length").val('{{@$editdata['product'][0]->length}}');
        $("#height").val('{{@$editdata['product'][0]->height}}');
        $("#width").val('{{@$editdata['product'][0]->width}}');
        $("#vendorName").val('{{@$editdata['product'][0]->vendorName}}');
        $("#vendorLocation").val('{{@$editdata['product'][0]->vendorLocation}}');
        $("#discount").val('{{@$editdata['product'][0]->discount}}');
        $("#rewardPoints").val('{{@$editdata['product'][0]->rewardPoints}}');
        $("#type").val('{{@$editdata['product'][0]->type}}');
        $("#img_height").val('{{@$editdata['product'][0]->img_height}}');
        $("#img_width").val('{{@$editdata['product'][0]->img_width}}');
        $("#feature_img_width").val('{{@$editdata['product'][0]->feature_img_width}}');
        $("#feature_img_height").val('{{@$editdata['product'][0]->feature_img_height}}');
        $("#type").val('{{@$editdata['product'][0]->type}}');
        $("#color").val('{{@$editdata['product'][0]->color}}');
        $("#id").val('{{@$editdata['product'][0]->id}}');
    </script>
@endsection