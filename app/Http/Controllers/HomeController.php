<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        return view('user.userHome');
    }

    public function adminHome(){

        return view('admin.adminHome');
    }

    public function safetyHome(){

        return view('safety.safetyHome');
    }

    public function healthHome(){

        return view('health.healthHome');
    }



}
