<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adopsi extends Model
{
    protected $table = 'adopsi';
    protected $fillable = ['title', 'alasan_owner', 'medical_note', 'deskripsi'];
}
