<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tags;

class TagsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // Home Page Tags
    public function Tags(){
    	$tags = DB::table('tags')->orderBy('id','desc')->paginate(5);
    	return view('admin.tags',compact('tags'));
    }

    // Add Tags
    public function AddTags(){
        return view('admin.add_tags');
        }

    // Store Data Tags
    public function StoreTags(Request $request){
        $validatedData = $request->validate([
            'tags' => 'required|unique:tags|max:255',
        ]);

        $data = array();
        $data['tags'] = $request->tags;
        DB::table('tags')->insert($data);

        $notification = array (
            'message' => 'Tags Added Successfully',
    	 	'alert-type' => 'success'
        );

        return Redirect()->route('tags')->with($notification);
    }

    // View Tags
    public function ViewTags($id){
        $tags = DB::table('tags')->where('id', $id)->first();
        return view('admin.view_tags', compact('tags'));
    }

    // Edit Tags
    public function EditTags($id){
        $tags = DB::table('tags')->where('id', $id)->first();
        return view('admin.edit_tags', compact('tags'));
    }

    // Update Tags
    public function UpdateTags(Request $request,$id){
        $data = array();
        $data['tags'] = $request->tags;
        DB::table('tags')->where('id',$id)->update($data);

        $notification = array(
            'message' => 'Tags updated successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('tags')->with($notification);
   }

   // Delete Tags
    public function DeleteTags($id){
        DB::table('tags')->where('id',$id)->delete();

        $notification = array(
            'message' => 'Tags deleted successfully',
            'alert-type' => 'warning'
        );

        return Redirect()->route('tags')->with($notification);
    }
}

