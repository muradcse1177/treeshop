<div class="col-sm-12">
    <div class="panel panel-bd lobidrag">
        <form>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" id="productCategory" required>
                        <option value=""> Select Category</option>
                        <?php if(isset($editdata['category']))
                            $data = $editdata;
                        ?>
                        @foreach($data['category'] as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Subcategory</label>
                    <select class="form-control" name="subcategory" id="productSubcategory" required>
                        <option value=""> Select Subcategory</option>
                        @if(isset($editdata['subcategory']))
                            @foreach($editdata['subcategory'] as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" required>
                    <input type="hidden" name="id" id="id">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status"  id="status"  required>
                        <option value=""> Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label> Product Description</label>
                    <textarea name="description" id="editor1" style="width: 100%;" rows="12">

                    </textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Product Model</label>
                    <input type="text" class="form-control" id="model" name="model" placeholder="Enter Product Model" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Product Tag</label>
                    <input type="text" class="form-control" id="tag" name="tag" placeholder="Enter Product Tag">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Product Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter Product Location">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter Product Price" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Product quantity" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Tax</label>
                    <select class="form-control" name="tax"  id="tax"  required>
                        <option value=""> Select Status</option>
                        <option value="1">Tax Able</option>
                        <option value="0">Non Taxable</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Date Available</label>
                    <input type="date" class="form-control" id="dateAvailable" name="dateAvailable" placeholder="Enter Product Date">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Weight</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter Product Weight">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Length</label>
                    <input type="text" class="form-control" id="length" name="length" placeholder="Enter Product Length">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Height</label>
                    <input type="text" class="form-control" id="height" name="height" placeholder="Enter Product Height">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Width</label>
                    <input type="text" class="form-control" id="width" name="width" placeholder="Enter Product Width">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Vendor Name</label>
                    <input type="text" class="form-control" id="vendorName" name="vendorName" placeholder="Enter Vendor Name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Vendor Location</label>
                    <input type="text" class="form-control" id="vendorLocation" name="vendorLocation" placeholder="Enter Vendor Location">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Discount</label>
                    <input type="number" class="form-control" id="discount" name="discount" value ="0" placeholder="Enter Discount">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Reward Points</label>
                    <input type="number" class="form-control" id="rewardPoints" name="rewardPoints" value ="0" placeholder="Enter Reward Points">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Color</label>
                    <input type="color" class="form-control" id="color" name="color" value ="#37a000" placeholder="Enter Reward Color">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <fieldset id="buildyourform">
                        <legend>
                            <button type="button" id="addProductImage" class="btn btn-base w-md m-rb-5"><span class="glyphicon glyphicon-plus"></span>Add Product Image</button>
                        </legend>

                        @if(isset($editdata['product'][0]->image))
                            <?php $images = json_decode($editdata['product'][0]->image,true); ?>
                            @foreach($images  as $image)
                                    <img src="{{ $image}}" alt="Product Image" height="200" width="200">
                            @endforeach
                        @endif
                    </fieldset>
                    <fieldset>
                        <legend></legend>
                     </fieldset>

                </div>
            </div>
            <button type="submit" class="btn btn-base pull-right">Submit</button>
        </form>
    </div>
</div>