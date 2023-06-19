<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Mahasiswa extends Model //Definisi Model
{
    use HasFactory;

    protected $table = "mahasiswas"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'jurusan',
        'no_handphone',
        'email',
        'tanggal_lahir',
        ];

};
