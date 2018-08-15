<?php

namespace App\Http\Controllers\adminpanel\catalog;

use App\Model\Category;
use App\model\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function selectSubcategory(Request $request){
        $subcategoryList =  Subcategory::where('category_id',$request->productCategory)->get();
        return response()->json(array('data'=>$subcategoryList));
    }
    public function add(Request $request){
        return  $request->all();
    }
}
