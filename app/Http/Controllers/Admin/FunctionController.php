<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FunctionController extends Controller
{
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success', 'Admin Logout');
    }

}
