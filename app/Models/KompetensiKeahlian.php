<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompetensiKeahlian extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_paket';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = ['kode_paket', 'kode_bidang', 'kode_program', 'nama_paket', 'singkatan'];

    public function bidangKeahlian()
    {
        return $this->belongsTo(BidangKeahlian::class, 'kode_bidang', 'kode_bidang');
    }

    public function programKeahlian()
    {
        return $this->belongsTo(ProgramKeahlian::class, 'kode_program', 'kode_program');
    }
}
