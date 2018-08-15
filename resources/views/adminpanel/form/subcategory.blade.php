<div class="form-group ">
    <label>The basics</label>
    <select class="form-control" name="category" id="category" required>
        <option value=""> Select Category</option>
        <?php if(isset($editdata['category']))
            $data = $editdata;
        ?>
        @foreach($data['category'] as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="exampleName">Name</label>
    <input type="text" class="form-control" id="name" name="name"   aria-describedby="emailHelp" placeholder="Enter New Sub Category" required>
    <input type="hidden" name="id" id="id">
</div>
<div class="form-group">
    <label for="exampleSelect1">Status</label>
    <select class="form-control " name="status"  id="status"  required>
        <option value=""> Select Status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>
<button type="submit" class="btn btn-base pull-right">Submit</button>