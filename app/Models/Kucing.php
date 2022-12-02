<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kucing extends Model
{
    protected $table = 'kucing';
    protected $fillable = ['image', 'nama_kucing', 'jenis_kucing'];
}
