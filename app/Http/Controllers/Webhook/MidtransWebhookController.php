<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Transaksi, Penitipan};
use Illuminate\Support\Facades\DB;
use Throwable;

class MidtransWebhookController extends Controller
{
    public function index(Request $request)
    {
        DB::beginTransaction();
        try {
            // Making Sure Webhook From Midtrans
            $hash = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . env('MIDTRANS_SERVER_KEY'));

            if ($request->signature_key === $hash) {
                // Find Transaksi
                $transaction = Transaksi::where('midtrans_order_id', $request->order_id)->first();

                // Find Penitipan
                $penitipan = Penitipan::find($transaction->id_penitipan);
                $penitipan->status = 'Approved';
                $penitipan->save();
            }

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
        }
    }
}
