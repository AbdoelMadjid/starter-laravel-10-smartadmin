<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKeahlian extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_program';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = ['kode_program', 'kode_bidang', 'nama_program'];

    public function bidangKeahlian()
    {
        return $this->belongsTo(BidangKeahlian::class, 'kode_bidang', 'kode_bidang');
    }

    public function kompetensiKeahlians()
    {
        return $this->hasMany(KompetensiKeahlian::class, 'kode_program', 'kode_program');
    }
}
