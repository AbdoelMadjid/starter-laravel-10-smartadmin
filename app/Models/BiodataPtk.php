<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BiodataPtk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_guru';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = [
        'id_guru', 'nip', 'gelardepan', 'namalengkap', 'gelarbelakang', 'jeniskelamin', 'jenisguru', 'tempatlahir', 'tanggallahir', 'agama', 'email', 'nomorhp', 'photo', 'motto', 'alamat_dusun', 'alamat_jalan', 'alamat_norumah', 'alamat_rt', 'alamat_rw', 'alamat_desa', 'alamat_kec', 'alamat_kab', 'alamat_kodepos', 'aktif', 'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($biodataPtk) {
            $user = User::create([
                'name' => $biodataPtk->namalengkap,
                'email' => $biodataPtk->email,
                'password' => bcrypt('defaultpassword'), // or generate a random password
                'role' => 'Guru Mapel', // or set based on $biodataPtk->jenisguru
            ]);
            $biodataPtk->user_id = $user->id;
            $biodataPtk->save();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
