<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function PhotoGallery(){
    	$photo = DB::table('photo')->orderBy('id','desc')->paginate(100);
    	return view('admin.photo',compact('photo'));
    }

    public function AddPhoto(){
    	return view('admin.add_photo');
    }

    // Store Photo
    public function StorePhoto(Request $request){

        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;

        $image = $request->photo;
            if ($image) {
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(500,300)->save('image/gallery/'.$image_one);
                $data['photo'] = 'image/gallery/'.$image_one;
                // image/photo/343434.png
                DB::table('photo')->insert($data);

                $notification = array(
                'message' => 'Photo Inserted Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('photo_gallery')->with($notification);

  	 	}else{
  	 		return Redirect()->back();
  	    }
   }

    public function EditPhoto($id){
        $photo = DB::table('photo')->where('id', $id)->first();
        return view('admin.edit_photo', compact('photo'));
    }

    public function UpdatePhoto(Request $request, $id){

        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;

        $oldimage = $request->oldimage;
        $image = $request->photo;
            if ($image) {
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(500,300)->save('image/gallery/'.$image_one);
                $data['photo'] = 'image/gallery/'.$image_one;
                // image/photo/343434.png
                DB::table('photo')->where('id',$id)->update($data);
                   unlink($oldimage);

                $notification = array(
                'message' => 'Photo updated successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('photo_gallery')->with($notification);

           }else{
               return Redirect()->back();
          }
    }

    public function DeletePhoto($id){
        DB::table('photo')->where('id',$id)->delete();
        $notification = array(
            'message' => 'Photo Deleted Successfully',
            'alert-type' => 'warning'
        );
        return Redirect()->route('photo_gallery')->with($notification);
    }

     // Video Gallery Index
     public function VideoGallery(){
        $video = DB::table('video')->orderBy('id','desc')->paginate(5);
        return view('admin.video',compact('video'));
    }

    // Add Video Gallery
    public function AddVideo(){
        return view('admin.add_video');
    }

    // Store Gallery
    public function StoreVideo(Request $request){
        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        DB::table('video')->insert($data);

        $notification = array(
              'message' => 'Video inserted successfully',
              'alert-type' => 'info'
        );

        return Redirect()->route('video_gallery')->with($notification);
   }

    // Edit Video Gallery
    public function EditVideo($id){
        $video = DB::table('video')->where('id', $id)->first();
        return view('admin.edit_video', compact('video'));
    }

    // Update Video Gallery


    // Delete Video Gallery
    public function DeleteVideo($id){
        $photo = DB::table('video')->where('id',$id)->first();
        DB::table('video')->where('id',$id)->delete();
        $notification = array(
            'message' => 'Video deleted successfully',
            'alert-type' => 'error'
        );

        return Redirect()->route('video_gallery')->with($notification);
    }
}


