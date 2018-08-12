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
}
