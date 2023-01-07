<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::select('id', 'biaya_titip', 'biaya_tambahan', 'biaya_status', 'total', 'status')->latest()->paginate(10);
        return view('admin/transaksi/index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/transaksi/create');
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
            'biaya_titip' => 'required',
            'biaya_tambahan' => 'required',
            'biaya_status' => 'required',
            'total' => 'required',
            'status' => 'required',
        ]);

        Transaksi::create([
            'biaya_titip' => Str::title($request->biaya_titip),
            'biaya_tambahan' => Str::title($request->biaya_tambahan),
            'biaya_status' => Str::title($request->biaya_status),
            'total' => Str::title($request->total),
            'status' => Str::title($request->status)
        ]);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil ditambahkan
            </div>
        ');
        
        return redirect('/transaksi');
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
        $transaksi = Transaksi::select('id', 'biaya_titip', 'biaya_tambahan', 'biaya_status', 'total', 'status')->whereId($id)->firstOrFail();
        return view('admin/transaksi/edit', compact('transaksi'));
    
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
            'biaya_titip' => 'required',
            'biaya_tambahan' => 'required',
            'biaya_status' => 'required',
            'total' => 'required',
            'status' => 'required',
        ]);

        Transaksi::whereId($id)->update([
            'biaya_titip' => Str::title($request->biaya_titip),
            'biaya_tambahan' => Str::title($request->biaya_tambahan),
            'biaya_status' => Str::title($request->biaya_status),
            'total' => Str::title($request->total),
            'status' => Str::title($request->status)
        ]);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil diubah
            </div>
        ');
        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaksi::whereId($id)->delete();

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil dihapus
            </div>
        ');
        return redirect('/transaksi');
    }
}
