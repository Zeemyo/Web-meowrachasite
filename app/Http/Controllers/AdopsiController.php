<?php

namespace App\Http\Controllers;

use App\Models\Adopsi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class AdopsiController extends Controller
{
    public function index()
    {
        $adopsi = Adopsi::select('id', 'title', 'alasan_owner', 'medical_note', 'deskripsi')->latest()->paginate(10);
        return view('admin/adopsi/index', compact('adopsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/adopsi/create');
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
            'title' => 'required',
            'alasan_owner' => 'required',
            'medical_note' => 'required',
            'deskripsi' => 'required'
        ]);

        Adopsi::create([
            
            'title' => $request->title,
            'alasan_owner' => $request->alasan_owner,
            'medical_note' => $request->medical_note,
            'deskripsi' => $request->deskripsi
        ]);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil ditambahkan
            </div>
        ');
        return redirect('/adopsi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adopsi = Adopsi::select('id', 'title', 'alasan_owner', 'medical_note', 'deskripsi')->whereId($id)->firstOrFail();
        return view('admin/adopsi/show', compact('adopsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $adopsi = Adopsi::select('id', 'title', 'alasan_owner', 'medical_note', 'deskripsi')->whereId($id)->firstOrFail();
        return view('admin/adopsi/edit', compact('adopsi'));
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
            'title' => 'required',
            'alasan_owner' => 'required',
            'medical_note' => 'required',
            'deskripsi' => 'deskripsi',
        ]);

        $data = [
            'title' => $request->title,
            'alasan_owner' => $request->alasan_owner,
            'medical_note' => $request->medical_note,
            'deskripsi' => $request->deskripsi,
        ];

        

        $adopsi->update($data);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil diubah
            </div>
        ');
        return redirect('/adopsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Adopsi::whereId($id)->delete();

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil dihapus
            </div>
        ');
        return redirect('/adopsi');
    }
}
