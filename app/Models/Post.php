<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['judul', 'konten', 'sampul', 'slug', 'id_kategori', 'id_user'];

    public function users()
    {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
