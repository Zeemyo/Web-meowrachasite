<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {

        $artikel = Post::select('sampul', 'judul', 'slug', 'created_at')->latest()->paginate(6);        
        $kategori = Kategori::select('slug', 'nama')->orderBy('nama', 'asc')->get();
        return view('artikel/index', compact('artikel', 'kategori'));
    }

    public function artikel($slug)
    {
        
        $artikel = Post::select('id', 'judul', 'konten', 'id_kategori', 'created_at', 'sampul')->where('slug', $slug)->firstOrFail();
        $kategori = Kategori::select('slug', 'nama')->orderBy('nama', 'asc')->get();
        return view('artikel/artikel', compact('artikel', 'kategori'));
    }

    public function kategori($slug)
    {
        
        $kategori = Kategori::select('id')->where('slug', $slug)->firstOrFail();       
        $artikel = Post::select('sampul', 'judul', 'slug', 'created_at')->where('id_kategori', $kategori->id)->latest()->paginate(6);     
        $kategori = Kategori::select('slug', 'nama')->orderBy('nama', 'asc')->get();
        return view('artikel/index', compact('artikel', 'kategori'));
    }

}
