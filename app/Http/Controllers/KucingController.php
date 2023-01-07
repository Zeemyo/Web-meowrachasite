<?php

namespace App\Http\Controllers;

use App\Models\Kucing;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class KucingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kucing = Kucing::latest()->paginate(5);
        return view('admin/kucing/index', compact('kucing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kucing/create');
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
            
            'nama_kucing' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'ras' => 'required',
            'gender' => 'required',
            'umur' => 'required',
            'merk_makanan' => 'required'
            
        ]);

        $image = time() .'-' .$request->image->getClientOriginalName();
        $request->image->move('upload/kucing', $image);

        Kucing::create([
            'image' => $image,
            'nama_kucing' => $request->nama_kucing,
            'ras' => $request->ras,
            'gender' => $request->gender,
            'umur' => $request->umur,
            'merk_makanan' => $request->merk_makanan
        ]);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil ditambahkan
            </div>
        ');
        return redirect('/kucing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Kucing::select('id', 'image', 'nama_kucing', 'ras', 'gender', 'umur', 'merk_makanan')->whereId($id)->firstOrFail();
        return view('admin/kucing/show', compact('kucing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kucing = Kucing::select('id', 'image', 'nama_kucing', 'ras', 'gender', 'umur', 'merk_makanan')->whereId($id)->first();
        return view('admin/kucing/edit', compact('kucing'));
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
            
            'image' => 'required|mimes:jpg,jpeg,png',
            'nama_kucing' => 'required',
            'ras' => 'required',
            'gender' => 'required',
            'umur' => 'required',
            'merk_makanan' => 'required'
        ]);

        $data = [
            'nama_kucing' => $request->nama_kucing,
            'ras' => $request->ras,
            'gender' => $request->gender,
            'umur' => $request->umur,
            'merk_makanan' => $request->merk_makanan
        ];

        $kucing = Kucing::select('image', 'id')->whereId($id)->first();
        if ($request->image) {
            File::delete('upload/kucing/' .$kucing->image);

            $image = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('upload/kucing', $image);

            $data['image'] = $image;
        }

        $kucing->update($data);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil diubah
            </div>
        ');
        return redirect('/kucing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // $kucing = Kucing::select('id', 'image', 'nama_kucing', 'ras', 'gender', 'umur', 'merk_makanan')->whereId($id);

        // $data = ['id', 'image', 'nama_kucing', 'ras', 'gender', 'umur', 'merk_makanan'];

        Kucing::whereId($id)->delete();
        
        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil dihapus
            </div>
        ');
        return redirect('/kucing');
    }
}
