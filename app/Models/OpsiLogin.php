<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpsiLogin extends Model
{
    use HasFactory;
    protected $table = 'opsi_logins';
    protected $primaryKey = 'id';
    protected $fillable = ['peran', 'aktif'];
}
