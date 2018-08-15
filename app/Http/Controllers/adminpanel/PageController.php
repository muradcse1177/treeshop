<?php

namespace App\Http\Controllers\adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $data['category'] = \App::call('App\Http\Controllers\adminpanel\catalog\CategoryController@allcategorylist');
        return View('adminpanel.catalog.products',['data' => $data]);
    }
}
