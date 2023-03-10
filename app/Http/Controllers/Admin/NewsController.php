<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function News(){
        $news = DB::table('news')
        ->join('categories','news.category_id','categories.id')
        ->join('sub_categories','news.subcategory_id','subcategories.id')
        ->join('tags','news.tags_id','tags.id')
        ->join('sub_tags','news.sub_tags_id','sub_tags.id')
        ->select('news.*','categories.category','sub_categories.subcategory','tags.tags','subtags.subtags')
        ->orderBy('id','desc');
        return view('admin.news',compact('news'));
    }

    // Create News
    public function AddNews(){
    	$category = DB::table('categories')->get();
    	$tags = DB::table('tags')->get();
    	return view('admin.add_news',compact('category','tags'));
    }

    // Get Sub Category
    public function GetSubCategory($category_id){
        $sub = DB::table('sub_categories')->where('category_id',$category_id)->get();
        return response()->json($sub);
    }

    // Get Sub Tags
    public function GetSubTags($tags_id){
        $sub = DB::table('sub_tags')->where('tags_id',$tags_id)->get();
        return response()->json($sub);
    }

    // Store News
    public function StoreNews(Request $request){
        $validatedData = $request->validate([
            'category_id' => 'required',
            'tags_id' => 'required',
           ]);

        $data = array();
        $data['title'] = $request->title;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['tags_id'] = $request->tags_id;
        $data['sub_tags_id'] = $request->sub_tags_id;
        $data['tags'] = $request->tags;
        $data['details'] = $request->details;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['created_at'] = $request->created_at;


        $image = $request->image;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('image/news/'.$image_one);
            $data['image'] = 'image/news/'.$image_one;
            // image/news/343434.png
            DB::table('news')->insert($data);

            $notification = array(
            'message' => 'News inserted successfully',
            'alert-type' => 'success'
      );


        return Redirect()->route('news_management')->with($notification);

            }else{
                return Redirect()->back();
            }
        }

    // Edit News
    public function EditNews($id){
        $news = DB::table('news')->where('id',$id)->first();
        $category = DB::table('categories')->get();
        $tags = DB::table('tags')->get();
        return view('admin.edit_news',compact('news','category','tags'));
    }

    // Update News
    public function UpdateNews(Request $request, $id){

        $data = array();
        $data['title'] = $request->title;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['tags_id'] = $request->tags_id;
        $data['sub_tags_id'] = $request->sub_tags_id;
        $data['tags'] = $request->tags;
        $data['details'] = $request->details;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;

        $oldimage = $request->oldimage;
        $image = $request->image;
            if ($image) {
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(500,300)->save('image/news/'.$image_one);
                $data['image'] = 'image/news/'.$image_one;
                DB::table('news')->where('id',$id)->update($data);
                unlink($oldimage);

                $notification = array(
              'message' => 'News updated successfully',
              'alert-type' => 'success'
          );

          return Redirect()->route('news')->with($notification);

            }else{
                $data['image'] = $oldimage;
                DB::table('news')->where('id',$id)->update($data);

                $notification = array(
              'message' => 'News updated successfully',
              'alert-type' => 'success'
          );
          return Redirect()->route('news')->with($notification);
        }
    }

    // Delete News
    public function DeleteNews($id){
        $news = DB::table('news')->where('id',$id)->first();
        unlink($news->image);

        DB::table('news')->where('id',$id)->delete();

        $notification = array(
                'message' => 'News deleted successfully',
                'alert-type' => 'error'
        );

        return Redirect()->route('news')->with($notification);
    }

}
