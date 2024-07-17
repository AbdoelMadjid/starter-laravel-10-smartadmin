<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class TahunAjaran extends Model
{
    use HasFactory;
    protected $table = 'tahun_ajarans';

    protected $primaryKey = 'id_ta';

    protected $fillable = [
        'tahunajaran',
        'semester',
        'aktif',
    ];

    public static function validate($data)
    {
        return Validator::make($data, [
            'tahunajaran' => 'required|string|max:255',
            'semester' => 'required|in:Ganjil,Genap',
            'aktif' => 'required|in:Y,N',
        ]);
    }
}
