<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\Adopsi;
use App\Models\Konsultasi;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        
        $artikel = Post::select('sampul', 'judul', 'slug','konten', 'created_at')->latest()->paginate(10);    
        
        return view('artikel/index', compact('artikel'));
    }

    public function artikel()
    {
        
        $artikel = Post::select('id', 'judul', 'konten', 'id_kategori', 'created_at', 'sampul')->latest()->paginate(10); 
        $kategori = Kategori::select('nama')->orderBy('nama', 'asc')->get();
        return view('artikel/artikel', compact('artikel', 'kategori'));
    }

    public function kategori()
    {
        
              
        $artikel = Post::select('sampul', 'judul', 'slug', 'created_at')->where('id_kategori', $kategori->id)->latest()->paginate(10);     
        $kategori = Kategori::select('slug', 'nama')->orderBy('nama', 'asc')->get();
        return view('artikel/index', compact('artikel', 'kategori'));
    }

    public function adopsi()
    {
        
        $adopsi = Adopsi::select('image', 'nama_kucing', 'jenis_kucing','deskripsi', 'alasan_owner', 'created_at')->latest()->paginate(10);
        return view('artikel/adopsi', compact('adopsi'));
    }

    public function konsultasi()
    {
        
        $konsultasi = Konsultasi::select('image', 'nama_konsultan', 'deskripsi', 'kontak', 'created_at')->latest()->paginate(10);
        return view('artikel/konsultasi', compact('konsultasi'));
    }

    

}
