<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_admin extends Model
{
    use HasFactory;
    protected $table = 'admin_satgas'; // Nama tabel dalam database
    // protected $primaryKey = 'kode'; // Nama kolom primary key
    protected $fillable = ['nama', 'email']; // Kolom yang dapat diisi
}
