<div class="form-group">
    <label for="exampleName">Name</label>
    <input type="text" class="form-control" id="name" name="name"   aria-describedby="emailHelp" placeholder="Enter New Banner" required>
    <input type="hidden" name="id" id="id">
</div>
<div class="form-group">
    @if(isset($editdata['banner']))
        <div class="row">
            <div class="col-md-2">
                <img src="{{ $editdata['banner'][0]->image}}" alt="Banner Image" height="60" width="100">
             </div>
            <label for="exampleName">Banner(jpg/png)</label>
            <div class="col-md-10">
                <input type="file" class="form-control" id="image" name="image"   aria-describedby="emailHelp" placeholder="Enter New Banner" @if(!isset($editdata['action'])){{'required'}} @endif >
            </div>
        </div>
    @else
        <label for="exampleName">Banner(jpg/png)</label>
        <input type="file" class="form-control" id="image" name="image"   aria-describedby="emailHelp" placeholder="Enter New Banner" required>
    @endif
</div>
<div class="form-group">
    <label for="exampleSelect1">Status</label>
    <select class="form-control" name="status"  id="status"  required>
        <option value=""> Select Status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>
<button type="submit" class="btn btn-base pull-right">Submit</button>