<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // Menentukan nama tabel, jika berbeda dari nama model (opsional)
    protected $table = 'skill';

    // Menentukan kolom-kolom yang bisa diisi (fillable)
    protected $fillable = [
        'skill_name',
        'proficiency',
        'description',
    ];

    // Jika tidak menggunakan kolom timestamps (created_at dan updated_at), bisa dinonaktifkan
    public $timestamps = true; // Ini default, tapi bisa diubah jika tidak dibutuhkan
}
