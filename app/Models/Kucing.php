<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kucing extends Model
{
    protected $table = 'kucing';
    protected $fillable = ['id_user', 'image', 'nama_kucing', 'ras', 'gender', 'umur', 'merk_makanan'];

    public function penitipan()
    {
        return $this->hasMany(Penitipan::class);
    }
}
