<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index(){
        return view('landing.landing');
    }

    public function about(){
        return view('landing.about');
    }

    public function admisi(){
        return view('landing.admisi');
    }

    public function matkul(){
        return view('landing.matkul');
    }
    public function detailcourse(){
        return view('landing.detailcourse');
    }

    public function eror404(){
        return view('landing.eror404');
    }

    public function faq(){
        return view('landing.faq');
    }

    public function gallery(){
        return view('landing.gallery');
    }

    public function dosen(){
        return view('landing.dosen');
    }

    public function detaillecturer(){
        return view('landing.detaillecturer');
    }

    public function princing(){
        return view('landing.princing');
    }

    public function testimoni(){
        return view('landing.testimoni');
    }

    public function mahasiswa(){
        return view('landing.mahasiswa');
    }

    public function mahasiswa_detail(){
        return view('landing.mahasiswa_detail');
    }

    public function matkul_list(){
        return view('landing.matkul_list');
    }

    public function blog(){
        return view('landing.blog');
    }

    public function blog_detail(){
        return view('landing.blog_detail');
    }



}
