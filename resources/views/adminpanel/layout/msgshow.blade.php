<div class="col-md-8">
</div>
@if (Session::has('successMsg'))
<div class="col-md-4">
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success!</strong> {{Session::get('successMsg')}}
    </div>
</div>
@endif
@if (Session::has('errorMsg'))
<div class="col-md-4">
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Ops!</strong>{{Session::get('errorMsg')}}
    </div>
</div>
@endif