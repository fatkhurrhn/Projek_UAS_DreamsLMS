<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    //menghubungkan model dengan tabel Event
    protected $table = 'lecturers';

    //deklarasikan kolom yang boleh diisi
    protected $fillable = ['nama', 'email', 'phone_number'];

     // menghubungkan ke model registration
   // 1 dokter dapat menangani banyak registration
   public function course() {
       // karena dokter menitipkann id ke registration
       // maka dokter menghubungkan has + kardinalitas
       // kardinalitas 1 to M dari model ini kemodel lain: hasMany
       // 1 to 1 ke model lain:hasOne
       return $this->hasMany(Course::class);
   }
}
