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
        $kucing = Kucing::select('id',  'nama_kucing', 'image', 'jenis_kucing')->latest()->paginate(5);
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
            'jenis_kucing' => 'required'
            
        ]);

        $image = time() .'-' .$request->image->getClientOriginalName();
        $request->image->move('upload/kucing', $image);

        Kucing::create([
            'image' => $image,
            'nama_kucing' => $request->nama_kucing,
            'jenis_kucing' => $request->jenis_kucing
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kucing = Kucing::select('id', 'image', 'nama_kucing', 'jenis_kucing')->whereId($id)->first();
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
            'jenis_kucing' => 'required'
        ]);

        $data = [
            'nama_kucing' => $request->nama_kucing,
            'jenis_kucing' => $request->jenis_kucing
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
        Kucing::whereId($id)->delete();

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil dihapus
            </div>
        ');
        return redirect('/kucing');
    }
}
