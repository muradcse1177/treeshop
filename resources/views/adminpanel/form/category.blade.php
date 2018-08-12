<div class="form-group">
    <label for="exampleName">Name</label>
    <input type="text" class="form-control" id="name" name="name"   aria-describedby="emailHelp" placeholder="Enter New Category" required>
    <input type="hidden" name="id" id="id">
</div>
<div class="form-group">
    <label for="exampleSelect1">Status</label>
    <select class="form-control" name="status"  id="status"  required>
        <option value="empty"> Select Status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>
<button type="submit" class="btn btn-base pull-right">Submit</button>