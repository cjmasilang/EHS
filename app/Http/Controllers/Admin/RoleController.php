<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}

    public function UserManagement(){
        $user = DB::table('users')->where('type',0)->get();
        return view('admin.user_management',compact('user'));
    }

 // Add User
    public function AddUser(){
        return view('admin.add_user');
    }

    // Store User
    public function StoreUser(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['calendar'] = $request->calendar;
        $data['roles'] = $request->roles;
        $data['department'] = $request->department;
        $data['category'] = $request->category;
        $data['tags'] = $request->tags;
        $data['news'] = $request->news;
        $data['settings'] = $request->settings;
        $data['type'] = 0;

        DB::table('users')->insert($data);

        $notification = array(
            'message' => 'The user successfully added',
            'alert-type' => 'success'
        );

        return Redirect()->route('user_management')->with($notification);
    }

    // View User
    public function ViewUser($id){
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.view_user', compact('user'));
    }

    // Edit User
    public function EditUser($id){
        $user = DB::table('users')->where('id',$id)->first();
        return view('admin.edit_user',compact('user'));
    }
    // Update User

    public function UpdateUser(Request $request, $id){

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['calendar'] = $request->calendar;
        $data['roles'] = $request->roles;
        $data['department'] = $request->department;
        $data['category'] = $request->category;
        $data['tags'] = $request->tags;
        $data['news'] = $request->news;
        $data['settings'] = $request->settings;
        $data['gallery'] = $request->gallery;

     	DB::table('users')->where('id',$id)->update($data);

     	 $notification = array(
    	 	'message' => 'User updated Successfully',
    	 	'alert-type' => 'success'
    	 );

    	 return Redirect()->route('user_management')->with($notification);

   }
    // Delete User
    public function DeleteUser($id){
        DB::table('users')->where('id',$id)->delete();
           $notification = array(
                'message' => 'User deleted successfully',
                'alert-type' => 'warning'
            );
         return Redirect()->route('user_management')->with($notification);
    }

}
