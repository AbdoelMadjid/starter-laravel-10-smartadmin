<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BiodataPtk extends Model
{
    use HasFactory;
    protected $table = 'biodata_ptks';
    protected $primaryKey = 'id_guru';
    // public $incrementing = false;
    // protected $keyType = 'char';

    protected $fillable = [
        'id_guru', 'nip', 'gelardepan', 'namalengkap', 'gelarbelakang', 'jeniskelamin', 'jenisguru', 'tempatlahir', 'tanggallahir', 'agama', 'email', 'nomorhp', 'photo', 'motto', 'alamat_dusun', 'alamat_jalan', 'alamat_norumah', 'alamat_rt', 'alamat_rw', 'alamat_desa', 'alamat_kec', 'alamat_kab', 'alamat_kodepos', 'aktif', 'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestBiodataPtk = BiodataPtk::orderBy('id_guru', 'desc')->first();
            $number = 1;
            if ($latestBiodataPtk) {
                $number = intval(substr($latestBiodataPtk->id_guru, 5)) + 1;
            }
            $model->id_guru = 'guru_' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
