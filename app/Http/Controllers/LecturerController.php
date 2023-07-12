<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    //

    public function index(){
        $lecturers = Lecturer::all();
        return view('lecturer.index', [
            'lecturers' => $lecturers
        ]);
    }

    public function create(){
        return view('lecturer.create');
    }

    //method untuk menyimpan form tambah pasien ke database
    public function store(Request $request){
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

       Lecturer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
       ]);
       return redirect('/lecturer');
    }

    //method untuk menampilkan form edit
    public function edit($id) {
        //cari pasien berdasarkan id
        $lecturer = Lecturer::find($id);

        return view('lecturer.edit', [
            'lecturer' => $lecturer
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
        $lecturer = Lecturer::find($id);

        $lecturer->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect('/lecturer')->with('success', 'Alhamdulillah data event berhasil diupdate');
    }

    //method untuk menghapus data dokter
    public function destroy(Request $request){
        //
        Lecturer::destroy($request->id);

        return redirect('/lecturer');
    }
}
