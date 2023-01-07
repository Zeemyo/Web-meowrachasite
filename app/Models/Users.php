<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['id', 'name', 'email'];

    public function penitipan()
    {
        return $this->hasMany(Penitipan::class);
    }

    public function adopsi()
    {
        return $this->hasMany(Adopsi::class);
    }
}
