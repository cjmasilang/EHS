<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SeoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function SearchEngineOptimization(){
    	$seo = DB::table('seo')->orderBy('id','desc')->paginate(100);
    	return view('admin.search_engine_optimization',compact('seo'));
    }

    public function AddSEO(){
        return view('admin.add_search_engine_optimization');
    }

    public function StoreSEO(Request $request){
        //$validatedDate = $request->validate([
        //    'category' => 'required|unique:categories|max:255',
        //]);

        $data = array();
        $data['author'] = $request->author;
        $data['title'] = $request->title;
        $data['keyword'] = $request->keyword;
        $data['description'] = $request->description;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_verification'] = $request->google_verification;
        $data['alexa_analytics'] = $request->alexa_analytics;
        DB::table('seo')->insert($data);

        $notification = array(
            'message' => 'SEO Added Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('search_engine_optimization')->with($notification);
    }

    public function EditSEO($id){
        $seo = DB::table('seo')->where('id',$id)->first();
        return view('admin.edit_search_engine_optimization',compact('seo'));
    }

    public function UpdateSEO(Request $request, $id){

    	$data = array();
    	$data['author'] = $request->author;
    	$data['title'] = $request->title;
    	$data['keyword'] = $request->keyword;
    	$data['description'] = $request->description;
    	$data['google_analytics'] = $request->google_analytics;
    	$data['google_verification'] = $request->google_verification;
    	$data['alexa_analytics'] = $request->alexa_analytics;
    	DB::table('seo')->where('id',$id)->update($data);

    	$notification = array(
    	 	'message' => 'Seo Setting Updated Successfully',
    	 	'alert-type' => 'success'
    	 );
    	return Redirect()->route('search_engine_optimization')->with($notification);
    }

    public function DeleteSEO($id){
        DB::table('seo')->where('id',$id)->delete();
        $notification = array(
            'message' => 'SEO Deleted Successfully',
            'alert-type' => 'warning'
        );
        return Redirect()->route('search_engine_optimization')->with($notification);
    }
}
