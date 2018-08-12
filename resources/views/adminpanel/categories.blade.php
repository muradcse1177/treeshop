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
                    <h1>Category Form</h1>
                    <ol class="breadcrumb">
                        <li><a href="/home"><i class="pe-7s-home"></i> Dashboard</a></li>
                        <li><a href="#">Catalog</a></li>
                        <li class="active">Category Form</li>
                    </ol>
                </div>
            </div>
            <div class="row">
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
                                <div class="form-group">
                                    <label for="exampleName">Name</label>
                                    <input type="email" class="form-control" id="exampleName" aria-describedby="emailHelp" placeholder="Enter New Category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Status</label>
                                    <select class="form-control">
                                        <option> Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-base pull-right">Submit</button>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection