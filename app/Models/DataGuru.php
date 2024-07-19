<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGuru extends Model
{
    protected $table = 'data_gurus';

    protected $primaryKey = 'id_guru';
    public $incrementing = false; // Since id_guru is not auto-incrementing
    protected $keyType = 'string';

    protected $fillable = [
        'id_guru', 'nip', 'gelardepan', 'namalengkap', 'gelarbelakang', 'jeniskelamin',
        'jenisguru', 'tempatlahir', 'tanggallahir', 'agama', 'email', 'nomorhp', 'photo',
        'motto', 'alamat_dusun', 'alamat_jalan', 'alamat_norumah', 'alamat_rt', 'alamat_rw',
        'alamat_desa', 'alamat_kec', 'alamat_kab', 'alamat_kodepos', 'aktif'
    ];
}
