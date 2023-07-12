<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view('student.index', [
            'students' => $students
        ]);
    }

    public function create(){
        return view('student.create');
    }

    //method untuk menyimpan form tambah pasien ke database
    public function store(Request $request){
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        Student::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
       ]);
       return redirect('/student');
    }

    //method untuk menampilkan form edit
    public function edit($id) {
        //cari pasien berdasarkan id
        $student = Student::find($id);

        return view('student.edit', [
            'student' => $student
        ]);
    }

     //method untuk update pasien
     public function update($id, Request $request){
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        //cari pasien berdasarkan id
        $student = Student::find($id);

        $student->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect('/student')->with('success', 'Alhamdulillah data event berhasil diupdate');
    }

    //method untuk menghapus data dokter
    public function destroy(Request $request){
        //
        Student::destroy($request->id);

        return redirect('/student');
    }
}
