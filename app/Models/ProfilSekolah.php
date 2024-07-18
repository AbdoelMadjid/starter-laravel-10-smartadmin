<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    use HasFactory;
    protected $table = 'profil_sekolahs';
    protected $primaryKey = 'npsn';
    protected $fillable = [
        'npsn', 'nm_sekolah', 'status', 'alamat_blok', 'alamat_no', 'alamat_rt',
        'alamat_rw', 'alamat_desa', 'alamat_kec', 'alamat_kab', 'alamat_provinsi',
        'alamat_kodepos', 'alamat_telepon', 'alamat_website', 'alamat_email', 'logo_sekolah'
    ];
}
