@extends('adminpanel.layout.app')
@section('title', 'Sub Categories')
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
                    <button id="addSubCategoryButton" type="button" class="btn btn-base w-md m-rb-5"><span class="glyphicon glyphicon-plus"></span>@if(isset($editdata['action'])){{'Edit'}}  @else{{"Add New"}} @endif Subcategory</button>
                    <button id="cancelSubCategoryButton" style="display: none;" type="button" class="btn btn-base w-md m-rb-5"><span class="glyphicon glyphicon-remove"></span>Cancel New Subcategory</button>
                    <ol class="breadcrumb">
                        <li><a href="/home"><i class="pe-7s-home"></i> Dashboard</a></li>
                        <li><a href="#">Catalog</a></li>
                        <li class="active">Subcategory</li>
                    </ol>
                </div>
            </div>
            <div id="subcategoryForm" class="row" style="@if(isset($editdata['action']) != 'edit') {{'display: none'}} @endif">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add New Sub Category</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            {{ Form::open(array('url' => '/subcategory/add', 'method' => 'post')) }}
                            @include('/adminpanel/form/subcategory')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
            @include('/adminpanel/layout/msgshow')
            @if(isset($editdata['action']) != 'edit')
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Subcategory List</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="categoryTable" class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; ?>

                                        @foreach ($data['subcategory'] as $subcategory)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{$subcategory->name}}</td>
                                                <td>{{$subcategory->category->name}}</td>
                                                <td>@if($subcategory->status ==1 ){{'Active'}} @else {{"Inactive"}}@endif</td>
                                                <td><a href="/subcategory/edit/{{$subcategory->id}}" data-toggle="tooltip" title="Edit"> <span class="glyphicon glyphicon-edit"></span> </a>  <a href="/subcategory/delete/{{$subcategory->id}}" data-toggle="tooltip" title="Delete"> <span class="glyphicon glyphicon-trash"></span> </a></td>
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
    <script src="/adminpanel/assets/plugins/datatables/dataTables-active.js"></script>
    <script>
        subcategoryBtnShowHide();
        $("#name").val('{{@$editdata['subcategory']->name}}');
        $("#category").val('{{@$editdata['subcategory']->category->id}}');
        $("#status").val('{{@$editdata['subcategory']->status}}');
        $("#id").val('{{@$editdata['subcategory']->id}}');
    </script>
@endsection