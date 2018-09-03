<?php

namespace App\Http\Controllers\web;

use App\model\Banner;
use App\Model\Category;
use App\model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebhomeController extends Controller
{
    public function webhome(){
        $data['category'] = Category::orderBy('name', 'asc')->where('status',1)->get();
        $data['banner'] = Banner::orderBy('id', 'desc')->where('status',1)->get();
        $data['product']['dayOfDay'] = Product::orderBy('id', 'desc')->where('status',1)->where('type','Day of the day')->get();
        $data['product']['bestProduct'] = Product::orderBy('id', 'desc')->where('status',1)->where('type','Best product')->get();
        $data['product']['featured'] = Product::orderBy('id', 'desc')->where('status',1)->where('type','Featured')->get();
//        echo '<pre>'; print_r($data['product']['dayOfDay']); echo '</pre>';  exit;
        return view('web/home', ['data' => $data]);
    }
    public function singleProduct(Request $request,$id){
        $data['category'] = Category::orderBy('name', 'asc')->where('status',1)->get();
        $data['product'] = Product::orderBy('id', 'desc')->where('status',1)->where('id',$id)->get();
        $data['product']['related'] = Product::orderBy('id', 'desc')->where('status',1)->limit(15)->get();
        return view('web/single-product',['data' => $data]);
    }
    public function cart(){
        $data['category'] = Category::orderBy('name', 'asc')->where('status',1)->get();
        return view('web/cart',['data' => $data]);
    }
}
