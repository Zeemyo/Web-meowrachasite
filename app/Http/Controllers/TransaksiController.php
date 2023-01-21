<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

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
}
