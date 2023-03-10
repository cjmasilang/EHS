<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Categories(){
    	$category = DB::table('categories')->orderBy('id','desc')->paginate(100);
    	return view('admin.category',compact('category'));
    }

    // Add Category
    public function AddCategory(){
        return view('admin.add_category');
    }

    // Store Data Category
    public function StoreCategory(Request $request){
        $validatedDate = $request->validate([
            'category' => 'required|unique:categories|max:255',
        ]);

        $data = array();
        $data['category'] = $request->category;
        DB::table('categories')->insert($data);

        $notification = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('categories')->with($notification);
    }

    // View Category
    public function ViewCategory($id){
        $category = DB::table('categories')->where('id', $id)->first();
        return view('admin.view_category', compact('category'));
    }

    // Edit Category
    public function EditCategory($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.edit_category',compact('category'));
    }

    // Update Category
    public function UpdateCategory(Request $request,$id){
        $data = array();
        $data['category'] = $request->category;
        DB::table('categories')->where('id',$id)->update($data);

        $notification = array(
            'message' => 'Category updated successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('categories')->with($notification);
    }

    // Delete Category
    public function DeleteCategory($id){
        DB::table('categories')->where('id',$id)->delete();
        $notification = array(
            'message' => 'Category deleted successfully',
            'alert-type' => 'warning'
        );
        return Redirect()->route('categories')->with($notification);
    }

}

