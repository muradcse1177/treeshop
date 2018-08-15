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
            <div id="productForm" class="row" style="@if(isset($editdata->action) != 'edit') {{'display: none'}} @endif">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add New Product</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            {{ Form::open(array('url' => '/product/add', 'method' => 'post')) }}
                            @include('/adminpanel/form/product')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
            {{--@include('/adminpanel/layout/msgshow')--}}
            @if(isset($editdata->action) != 'edit')
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
                                            <th>Name</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

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

    {{--<script src="/adminpanel/assets/plugins/datatables/dataTables-active.js"></script>--}}
    <script>
        productBtnShowHide();
    </script>
@endsection