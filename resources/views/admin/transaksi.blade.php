@extends('sb-admin/app')
@section('title', 'penitipan')


@section('content')
    {{-- flashdata --}}
    {!! session('sukses') !!}
    <h1 class="mb-5 text-center">Virtual Account Transaksi</h1>
    <center>Lakukan Pembayaran Dengan Nomor Virtual Account Di bawah ini</center>

    <table class="table text-center mt-3" width="100%">
        <thead>
            <tr>
                <td>VA Number</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $transaksi->midtrans_va_number }}</td>
            </tr>
        </tbody>
    </table>

    <a href="/penitipan" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
