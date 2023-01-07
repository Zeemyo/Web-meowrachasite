<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['biaya_titip', 'biaya_tambahan', 'biaya_antar_jemput', 'total', 'status'];
}
