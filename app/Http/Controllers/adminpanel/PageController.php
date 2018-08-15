<?php

namespace App\Http\Controllers\adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function categories()
    {
        $data = \App::call('App\Http\Controllers\adminpanel\category\CategoryController@allcategorylist');
        return View('adminpanel.categories',['data' => $data]);
    }
    public function subcategories()
    {
        $data['category'] = \App::call('App\Http\Controllers\adminpanel\category\CategoryController@allcategorylist');
        $data['subcategory'] = \App::call('App\Http\Controllers\adminpanel\subcategory\SubcategoryController@allsubcategorylist');
        return View('adminpanel.subcategories' ,['data' => $data]);
    }
}
