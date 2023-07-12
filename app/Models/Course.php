<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //menghubungkan model dengan tabel registrations
    protected $table = 'courses';

    //deklarasikan kolom yang boleh diisi
    protected $fillable = ['lecturer_id', 'nama'];

    // menghubungkan ke model event
    public function lecturer() {
        // karena status model saat ini adalah yang ditipkan id.
        // maka dapat menggunakan belongsTo atau belongsToMany
        return $this->belongsTo(Lecturer::class);
    }
}
