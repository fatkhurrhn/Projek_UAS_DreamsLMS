<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function index(){
        $courses = Course::all();
        return view('course.index', [
            'courses' => $courses
        ]);
    }

    public function create(){
        $lecturers = Lecturer::all();
        return view('course.create', [
            'lecturers' => $lecturers
        ]);
    }

    //method untuk menyimpan form tambah course ke database
    public function store(Request $request){
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'lecturer_id' => 'required'
        ]);

       Course::create([
            'nama' => $request->nama,
            'lecturer_id' => $request->lecturer_id,
       ]);
       return redirect('/course');
    }

    //method untuk menampilkan form edit
    public function edit($id) {
        //cari course berdasarkan id
        $course = Course::find($id);

        $lecturers = Lecturer::all();

        return view('course.edit', [
            'course' => $course,
            'lecturers' => $lecturers
        ]);
    }

    //method untuk update course
    public function update($id, Request $request){
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'lecturer_id' => 'required'
        ]);

        //cari course berdasarkan id
        $course = Course::find($id);

        $course->update([
            'nama' => $request->nama,
            'lecturer_id' => $request->lecturer_id,
        ]);

        return redirect('/course')->with('success', 'Alhamdulillah data berhasil diupdate');
    }

    //method untuk menghapus data course
    public function destroy(Request $request){
        //
        Course::destroy($request->id);

        return redirect('/course');
    }
}
