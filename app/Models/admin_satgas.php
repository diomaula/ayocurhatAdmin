<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Perbaikan pada penggunaan kelas
use Illuminate\Notifications\Notifiable;

class admin_satgas extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admin_satgas';
    protected $primaryKey = 'id_admin';

    protected $fillable = ['nama', 'email', 'password', 'jenis_kelamin', 'alamat', 'nomorhp'];
}
