<?php

namespace App\Http\Controllers\adminpanel\catalog;

use App\Model\Category;
use App\model\Product;
use App\model\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Image;

class ProductController extends Controller
{
    public function selectSubcategory(Request $request){
        $subcategoryList =  Subcategory::where('category_id',$request->productCategory)->get();
        return response()->json(array('data'=>$subcategoryList));
    }
    public function add(Request $request){
        try {
            $product = new Product();
            if ($request->id) {
                $product = Product::find($request->id);
            }
            $product->category_id = $request->category;
            $product->subcategory_id = $request->subcategory;
            $product->name = $request->name;
            $product->status = $request->status;
            $product->description = @$request->description;
            $product->model = @$request->model;
            $product->tag = @$request->tag;
            $product->location = @$request->location;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->tax = $request->tax;
            $product->dateAvailable = @$request->dateAvailable;
            $product->weight = @$request->weight;
            $product->length = @$request->length;
            $product->height = @$request->height;
            $product->width = @$request->width;
            $product->vendorName = @$request->vendorName;
            $product->vendorLocation = @$request->vendorLocation;
            $product->discount = @$request->discount;
            $product->rewardPoints = @$request->rewardPoints;
            $product->type = @$request->type;
            $product->img_width = @$request->img_width;
            $product->img_height = @$request->img_height;
            $product->feature_img_width = @$request->feature_img_width;
            $product->feature_img_height = @$request->feature_img_height;
            $product->color = @$request->color;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                foreach ($file as $images) {
                    $targetFolder = 'adminpanel/uploads/images/products/';
                    $name = time() . '.' . $images->getClientOriginalName();
                    $image_resize = Image::make($images->getRealPath());
                    $image_resize->resize(@$request->img_width, @$request->img_height);
                    $image_resize->save($targetFolder . $name);
                    $path = '/' . $targetFolder . $name;
                    $imagesP[] = $path;
                }
                $imagepath = json_encode($imagesP, true);
            }
            else{
                $imagepath = $product->image;
            }

            if ($request->hasFile('feature_image')) {
                $fimages = $request->file('feature_image');
                $ftargetFolder = 'adminpanel/uploads/images/products/';
                $fname = time() . '.' . $fimages->getClientOriginalName();
                $fimage_resize = Image::make($fimages->getRealPath());
                $fimage_resize->resize(@$request->feature_img_width, @$request->feature_img_height);
                $fimage_resize->save($ftargetFolder . $fname);
                $fpath = '/' . $ftargetFolder . $fname;
                $feature_imagepath =  $fpath;
            }
            else{
                $feature_imagepath = $product->feature_image;
            }
            $product->image = $imagepath;
            $product->feature_image = $feature_imagepath;
//            echo $product; exit;
            $save = $product->save();
            if ($save) {
                $data['product'] = Product::orderBy('id', 'desc')->get();
                $data['category'] = Category::orderBy('name', 'asc')->get();
                $request->session()->flash('successMsg', 'Product added successful!');
                return View('adminpanel.catalog.products', ['data' => $data]);

            } else {
                $request->session()->flash('errorMsg', 'Product added failed!');
                return Redirect::back();
            }
        }
        catch (\Illuminate\Database\QueryException $ex){
            $request->session()->flash('errorMsg', $ex->getMessage());
            return Redirect::back();
        }
    }
    public function edit($id,$category_id){
        $data['category'] = Category::orderBy('name', 'asc')->get();
        $data['subcategory'] = Subcategory::orderBy('name', 'asc')->where('category_id',$category_id)->get();
        $data['product'] = Product::orderBy('id', 'desc')->where('id',$id)->get();
        $data['action'] = 'edit';
        return View('adminpanel.catalog.products',['editdata' => $data]);
    }
}
