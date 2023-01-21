<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Penitipan;

class TransaksiController extends Controller
{
    public function index()
    {
        $transactions = Transaksi::get();


        $data = [
            'title' => 'Home',
            'transactions' => $transactions
        ];

        return view('admin.transaksi', $data);
    }

    public function show(int $id_penitipan)
    {
        $transaksi = Transaksi::where('id_penitipan', $id_penitipan)->first();
        $data = [
            'transaksi' => $transaksi
        ];

        return view('admin.transaksi', $data);
    }
}
