<?php

namespace App\Http\Controllers\adminpanel\category;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function add(Request $request){
        try {
            $category = new Category();
            if ($request->id) {
                $category = Category::find($request->id);
            }
            $category->name = $request->name;
            $category->status = $request->status;
            $save = $category->save();
            if ($save) {
                $data = Category::orderBy('name', 'asc')->get();
                $request->session()->flash('successMsg', 'Category added successful!');
                return View('adminpanel.categories', ['data' => $data]);
            } else {
                 $request->session()->flash('errorMsg', 'Category added failed!');
                 return Redirect::back();
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            $request->session()->flash('errorMsg', $ex->getMessage());
            return Redirect::back();
        }
    }

    public function allcategorylist(){
        return Category::orderBy('name', 'asc')->get();
    }

    public function edit(Request $request,$id){
        $data =  Category::where('id',$id)->get();
        $data->action = 'edit';
        return View('adminpanel.categories',['editdata' => $data]);
    }

    public function delete(Request $request,$id){
        Category::where('id',$id)->delete();
        $data = Category::orderBy('name', 'asc')->get();
        $request->session()->flash('successMsg', 'Category Deleted successful!');
        return View('adminpanel.categories', ['data' => $data]);
    }
}
