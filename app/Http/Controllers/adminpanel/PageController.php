<?php

namespace App\Http\Controllers\adminpanel;

use App\model\Banner;
use App\Model\Category;
use App\model\Product;
use App\model\Product_image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function categories()
    {
        $data = \App::call('App\Http\Controllers\adminpanel\catalog\CategoryController@allcategorylist');
        return View('adminpanel.catalog.categories',['data' => $data]);
    }
    public function subcategories()
    {
        $data['category'] = \App::call('App\Http\Controllers\adminpanel\catalog\CategoryController@allcategorylist');
        $data['subcategory'] = \App::call('App\Http\Controllers\adminpanel\catalog\SubcategoryController@allsubcategorylist');
        return View('adminpanel.catalog.subcategories' ,['data' => $data]);
    }
    public function products()
    {
        $data['product'] = Product::orderBy('id', 'desc')->get();
        $data['category'] = Category::orderBy('name', 'asc')->get();
        return View('adminpanel.catalog.products',['data' => $data]);
    }
    public function banners()
    {
        $data['banner'] = Banner::orderBy('id', 'desc')->get();
        return View('adminpanel.catalog.banners',['data' => $data]);
    }
}
