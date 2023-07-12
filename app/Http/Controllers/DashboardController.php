<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function course_detail(){
        return view('admin.course_detail');
    }
}

