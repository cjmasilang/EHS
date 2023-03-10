<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // Home Page Sub Category
    public function SubCategory(){
    	$sub_cat = DB::table('sub_categories')->orderBy('id','desc')->paginate(100);
    	return view('admin.sub_category',compact('sub_cat'));
    }

    // Add Sub Category
    public function AddSubCategory(){
    	$category = DB::table('categories')->get();
    	return view('admin.add_sub_category',compact('category'));
    }

    // Store Data Sub Category
    public function StoreSubCategory(Request $request){
        $validatedData = $request->validate([
       // 'sub_cat' => 'required|unique:sub_categories|max:255',
      ]);

        $data = array();
        $data['subcategory'] = $request->subcategory;
        $data['category_id'] = $request->category_id;
        DB::table('sub_categories')->insert($data);

        $notification = array(
            'message' => 'Sub Category Added Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('subcategories')->with($notification);
   }

   // Edit Sub Category
    public function EditSubCategory($id){
        $sub_cat = DB::table('sub_categories')->where('id',$id)->first();
        $category = DB::table('categories')->get();
        return view('admin.edit_sub_category',compact('sub_cat','category'));
    }

    // View Sub Category
    public function ViewSubCategory($id){
        $sub_cat = DB::table('sub_categories')->where('id', $id)->first();
        return view('admin.view_sub_category', compact('sub_cat'));
    }

    // Update Sub Category
    public function UpdateSubCategory(Request $request, $id){
        $data = array();
        $data['subcategory'] = $request->subcategory;
        $data['category_id'] = $request->category_id;
        DB::table('sub_categories')->where('id',$id)->update($data);

        $notification = array(
            'message' => 'Sub Category updated successfully',
            'alert-type' => 'warning'
        );
        return Redirect()->route('subcategories')->with($notification);
   }

   // Delete Sub Category
   public function DeleteSubCategory($id){
    DB::table('sub_categories')->where('id',$id)->delete();

    $notification = array(
        'message' => 'Tags deleted successfully',
        'alert-type' => 'warning'
    );

    return Redirect()->route('subcategories')->with($notification);
}

}
