<?php

namespace App\Http\Controllers\adminpanel\catalog;

use App\model\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class BannerController extends Controller
{
    public function add(Request $request){
        try {
            $banner = new Banner();
            if ($request->id) {
                $banner = Banner::find($request->id);
                $path = $banner->image;
            }
            if($request->hasFile('image')) {
                $image       = $request->file('image');
                $filename    = time() . '.' .$image->getClientOriginalName();
                $targetFolder = 'adminpanel/uploads/images/banners/';
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(1920, 896);
                $image_resize->save($targetFolder . $filename);
                $path =   '/' .$targetFolder . $filename;
            }
            $banner->name = $request->name;
            $banner->status = $request->status;
            $banner->image = $path;
            $save = $banner->save();
            if($save){
                $data['banner'] = Banner::orderBy('id', 'desc')->get();
                $request->session()->flash('successMsg', 'Banner added successful!');
                return View('adminpanel.catalog.banners',['data' => $data]);
            }
            else{
                $request->session()->flash('errorMsg', 'Banner added failed!');
                return Redirect::back();
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            $request->session()->flash('errorMsg', $ex->getMessage());
            return Redirect::back();
        }
    }
    public function edit(Request $request,$id){
        $data['banner'] =  Banner::where('id',$id)->get();
        $data['action'] = 'edit';
        return View('adminpanel.catalog.banners',['editdata' => $data]);
    }
}
