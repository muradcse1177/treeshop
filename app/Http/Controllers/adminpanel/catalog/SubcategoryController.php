<?php

namespace App\Http\Controllers\adminpanel\catalog;

use App\Model\Category;
use App\Model\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SubcategoryController extends Controller
{
    public function add(Request $request){
        try{
            $subcategory = new Subcategory();
            if ($request->id) {
                $subcategory = Subcategory::find($request->id);
            }
            $subcategory->category_id = $request->category;
            $subcategory->name = $request->name;
            $subcategory->status = $request->status;
            $save = $subcategory->save();
            if($save){
                $data['category'] = Category::orderBy('name', 'asc')->get();
                $data['subcategory'] = Subcategory::find(1)->orderBy('name', 'asc')->get();
                $request->session()->flash('successMsg', 'Subcategory added successful!');
                return View('adminpanel.catalog.subcategories', ['data' => $data]);
            }
            else{
                $request->session()->flash('errorMsg', 'Subcategory added failed!');
                return Redirect::back();
            }
        }
        catch (\Illuminate\Database\QueryException $ex){
            $request->session()->flash('errorMsg', $ex->getMessage());
            return Redirect::back();
        }
    }
    public function allsubcategorylist(){
        return Subcategory::find(1)->orderBy('name', 'asc')->get();
    }
    public function edit(Request $request,$id){
        $data['category'] = Category::orderBy('name', 'asc')->get();
        $data['subcategory'] =  Subcategory::find(1)->where('id', $id)->first();
//        echo '<pre>'; print_r($data['subcategory']->category->name); echo '</pre>';  exit;
        $data['action'] = 'edit';
        return View('adminpanel.catalog.subcategories',['editdata' => $data]);
    }
    public function delete(Request $request,$id){
        Subcategory::where('id',$id)->delete();
        $data['category'] = Category::orderBy('name', 'asc')->get();
        $data['subcategory'] = Subcategory::find(1)->orderBy('name', 'asc')->get();
        $request->session()->flash('successMsg', 'Subcategory Deleted successful!');
        return View('adminpanel.catalog.subcategories', ['data' => $data]);
    }
}
