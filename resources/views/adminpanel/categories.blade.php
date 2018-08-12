@extends('adminpanel.layout.app')
@section('title', 'Categories')
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
                    <button id="addCategoryButton" type="button" class="btn btn-base w-md m-rb-5"><span class="glyphicon glyphicon-plus"></span>@if(isset($editdata->action)){{'Edit'}}  @else{{"Add New"}} @endif Category</button>
                    <ol class="breadcrumb">
                        <li><a href="/home"><i class="pe-7s-home"></i> Dashboard</a></li>
                        <li><a href="#">Catalog</a></li>
                        <li class="active">Category</li>
                    </ol>
                </div>
            </div>
            <div id="categoryForm" class="row" style="@if(isset($editdata->action) != 'edit') {{'display: none'}} @endif">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add New Category</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            {{ Form::open(array('url' => '/category/add', 'method' => 'post')) }}
                            @include('/adminpanel/form/category')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
            @include('/adminpanel/layout/msgshow')
            @if(isset($editdata->action) != 'edit')
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Category List</h4>
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
                                        <?php $i = 1; ?>
                                        @foreach ($data as $category)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{$category->name}}</td>
                                                <td>@if($category->status ==1 ){{'Active'}} @else {{"Inactive"}}@endif</td>
                                                <td><a href="/category/edit/{{$category->id}}" data-toggle="tooltip" title="Edit"> <span class="glyphicon glyphicon-edit"></span> </a>  <a href="/category/delete/{{$category->id}}" data-toggle="tooltip" title="Delete"> <span class="glyphicon glyphicon-trash"></span> </a></td>
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
    <script>
        $("#addCategoryButton").click(function(){
            $("#categoryForm").show();
        });
        $("#name").val('{{@$editdata[0]->name}}');
        var status = "<?php  if(isset($editdata[0]->status)) echo $editdata[0]->status; else{echo "empty" ;} ?>";
        if(status)
            $("#status").val(status);
        $("#id").val('{{@$editdata[0]->id}}');
    </script>
    <script src="/adminpanel/assets/plugins/datatables/dataTables-active.js"></script>
@endsection