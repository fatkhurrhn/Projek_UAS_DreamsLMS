<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagementuserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('managementuser.index', [
            'users' => $users
        ]);
    }

    public function create(){
        return view('managementuser.create');
    }

    //method untuk menyimpan form tambah pasien ke database
    public function store(Request $request){
        //validasi data form
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required', 
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,

       ]);
       return redirect('/managementuser');
    }

    //method untuk menampilkan form edit
    public function edit($id) {
        //cari pasien berdasarkan id
        $managementuser = User::find($id);

        return view('managementuser.edit', [
            'managementuser' => $managementuser
        ]);
    }

     //method untuk update pasien
     public function update($id, Request $request){
        //validasi data form
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        //cari pasien berdasarkan id
        $managementuser = User::find($id);

        $managementuser->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);

        return redirect('/managementuser')->with('success', 'Alhamdulillah data User berhasil diupdate');
    }

    //method untuk menghapus data dokter
    public function destroy(Request $request){
        //
        User::destroy($request->id);

        return redirect('/managementuser');
    }
}
