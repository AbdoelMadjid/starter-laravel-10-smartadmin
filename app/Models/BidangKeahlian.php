<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangKeahlian extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_bidang';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = ['kode_bidang', 'nama_bidang'];

    public function programKeahlians()
    {
        return $this->hasMany(ProgramKeahlian::class, 'kode_bidang', 'kode_bidang');
    }
}
