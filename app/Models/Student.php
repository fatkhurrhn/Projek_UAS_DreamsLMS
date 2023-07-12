<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //menghubungkan model dengan tabel Event
    protected $table = 'students';

    //deklarasikan kolom yang boleh diisi
    protected $fillable = ['nama', 'email', 'phone_number'];

}
