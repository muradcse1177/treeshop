@extends('adminpanel.layout.app')
@section('title', 'Banners')
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
                    <button id="addBannerButton" type="button" class="btn btn-base w-md m-rb-5"><span class="glyphicon glyphicon-plus"></span>@if(isset($editdata['action'])){{'Edit'}}  @else{{"Add New"}} @endif Banner</button>
                    <button id="cancelBannerButton" style="display: none;" type="button" class="btn btn-base w-md m-rb-5"><span class="glyphicon glyphicon-remove"></span> Cancel New Banner</button>
                    <ol class="breadcrumb">
                        <li><a href="/home"><i class="pe-7s-home"></i> Dashboard</a></li>
                        <li><a href="#">Catalog</a></li>
                        <li class="active">Banners</li>
                    </ol>
                </div>
            </div>
            <div id="bannerForm" class="row" style="@if(isset($editdata['action']) != 'edit') {{'display: none'}} @endif">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add New Banner</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            {{ Form::open(array('url' => '/banner/add', 'method' => 'post','files'=>'true')) }}
                            @include('/adminpanel/form/banner')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
            @include('/adminpanel/layout/msgshow')
            @if(isset($editdata['action']) != 'edit')
                <div class="row" id="bannerTable">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Banner List</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table  id="categoryTable" class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data['banner'] as $banners)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td align="center"><img src="{{ $banners->image}}" alt="Banner Image" height="60" width="100"></td>

                                                <td>{{$banners->name}}</td>
                                                <td>@if($banners->status ==1 ){{'Active'}} @else {{"Inactive"}}@endif</td>
                                                <td><a href="/banner/edit/{{$banners->id}}" data-toggle="tooltip" title="Edit"> <span class="glyphicon glyphicon-edit"></span> </a> </td>
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
        bannerBtnShowHide();
        $("#name").val('{{@$editdata['banner'][0]->name}}');
        $("#status").val('{{@$editdata['banner'][0]->status}}');
        $("#id").val('{{@$editdata['banner'][0]->id}}');
    </script>
@endsection