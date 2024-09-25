<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi
    protected $table = 'contacts';

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama',     // Nama kontak
        'email',    // Email kontak
        'telepon',  // Nomor telepon kontak
        'alamat',   // Alamat kontak
        'instansi', // Instansi atau perusahaan
    ];

    // Jika ada relasi, bisa ditambahkan di sini
}
