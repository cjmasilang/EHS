<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubTags;

class SubTagsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // Home Page Sub Tag
    public function SubTags(){
    	$sub = DB::table('sub_tags')->orderBy('id','desc')->paginate(100);
    	return view('admin.sub_tags',compact('sub'));
    }

    // Add Sub Tags
    public function AddSubTags(){
        $tags = DB::table('tags')->get();
        return view('admin.add_sub_tags', compact('tags'));
    }

    // Store Data Sub Tags
    public function StoreSubTags(Request $request){
        $validatedData = $request->validate([
            //'subtags' => 'required|unique:subtags|max:255',
           ]);

            $data = array();
            $data['sub_tags'] = $request->sub_tags;
            $data['tags_id'] = $request->tags_id;
            DB::table('sub_tags')->insert($data);

            $notification = array(
            'message' => 'Sub Tags inserted successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('subtags')->with($notification);
    }

    // View Sub Tags
    public function ViewSubtags($id){
        $subtags = DB::table('sub_tags')->where('id', $id)->first();
        return view('admin.view_sub_tags', compact('subtags'));
    }

    // Edit Sub Tags
    public function EditSubTags($id){
    	$subtags = DB::table('sub_tags')->where('id',$id)->first();
    	$tags = DB::table('tags')->get();
    	return view('admin.edit_sub_tags',compact('subtags','tags'));

    }

    // Update Data Sub Tags
    public function UpdateSubTags(Request $request,$id){
        $data = array();
        $data['sub_tags'] = $request->sub_tags;
        $data['tags_id'] = $request->tags_id;
        DB::table('sub_tags')->where('id',$id)->update($data);

        $notification = array(
            'message' => 'Sub Tags updated successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('subtags')->with($notification);
   }

   // Delete Sub Tags
    public function DeleteSubTags($id){
        DB::table('sub_tags')->where('id',$id)->delete();

        $notification = array(
        'message' => 'Sub Tags deleted successfully',
        'alert-type' => 'error'
        );

        return Redirect()->route('subtags')->with($notification);
    }


}


