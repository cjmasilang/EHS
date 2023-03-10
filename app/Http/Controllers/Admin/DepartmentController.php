<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Department(){
    	$department = DB::table('department')->orderBy('id','desc')->paginate(100);
    	return view('admin.department',compact('department'));
    }

    //public function AddDepartment(Request $request){
    //    $department = Department::all();

    //        $data = new Department;
    //        $data->department = $request->department;
    //        $data->save();
    //        $notification = array(
    //            'message' => 'The user successfully added',
    //            'alert-type' => 'success'
    //        );

    //        return Redirect()->route('user_management')->with($notification);
    //    }

    public function AddDepartment(){
        return view('admin.add_department');
    }

    // Store Data
    public function StoreDepartment(Request $request){
        $validatedData = $request->validate([
            'department' => 'required|unique:department|max:255',
        ]);

        $data = array();
        $data['department'] = $request->department;
        DB::table('department')->insert($data);

        $notification = array (
            'message' => 'Department inserted successfully',
    	 	'alert-type' => 'success'
        );

        return Redirect()->route('department')->with($notification);
    }

    // View Department
    public function ViewDepartment($id){
        $department = DB::table('department')->where('id', $id)->first();
        return view('admin.view_department', compact('department'));
    }

    // Edit Department
    public function EditDepartment($id){
        $department = DB::table('department')->where('id', $id)->first();
        return view('admin.edit_department', compact('department'));
    }

    // Update Department
    public function UpdateDepartment(Request $request,$id){
        $data = array();
        $data['department'] = $request->department;
        DB::table('department')->where('id',$id)->update($data);

        $notification = array(
            'message' => 'Department updated successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('department')->with($notification);
   }

   // Delete Departments
   public function DeleteDepartment($id){
        DB::table('department')->where('id',$id)->delete();

        $notification = array(
            'message' => 'Department deleted successfully',
            'alert-type' => 'warning'
        );

        return Redirect()->route('department')->with($notification);
    }
}
