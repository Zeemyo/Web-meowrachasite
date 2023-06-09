<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Users;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::latest()->paginate(10);
        return view('admin/post/index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Users::select('id', 'name')->get();
        $kategori = Kategori::select('id', 'nama')->get();
        return view('admin/post/create', compact('kategori', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'judul' => 'required',
            'sampul' => 'required|mimes:jpg,jpeg,png',
            'konten' => 'required',
            'kategori' => 'required'
        ]);

        // dd($request);
        $sampul = time() . '-' . $request->sampul->getClientOriginalName();
        $request->sampul->move('upload/post', $sampul);

        Post::create([
            'sampul' => $sampul,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'id_user' => $request->id_user,
            'id_kategori' => $request->kategori,
            'slug' => Str::slug($request->judul, '-')
        ]);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil ditambahkan
            </div>
        ');
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::select('id', 'judul', 'sampul', 'konten')->whereId($id)->firstOrFail();
        return view('admin/post/show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Users::select('id', 'name')->get();
        $kategori = Kategori::select('id', 'nama')->get();
        $post = Post::select('id', 'judul', 'sampul', 'konten', 'id_kategori')->whereId($id)->firstOrFail();
        return view('admin/post/edit', compact('post', 'kategori', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required',
            'judul' => 'required',
            'sampul' => 'mimes:jpg,jpeg,png',
            'kategori' => 'required',
            'konten' => 'required',
        ]);

        $data = [
            'id_user' => $request->users,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'id_kategori' => $request->kategori,
            'slug' => Str::slug($request->judul, '-')
        ];

        $post = Post::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {
            File::delete('upload/post/' . $post->sampul);

            $sampul = time() . '-' . $request->sampul->getClientOriginalName();
            $request->sampul->move('upload/post', $sampul);

            $data['sampul'] = $sampul;
        }

        $post->update($data);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil diubah
            </div>
        ');
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Post::whereId($id)->delete();

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil dihapus
            </div>
        ');
        return redirect('/post');
    }
}
