@extends('sb-admin/app')
@section('title', 'penitipan')


@section('content')
    {{-- flashdata --}}
    {!! session('sukses') !!}
    <h1 class="mb-5 text-center">Virtual Account Transaksi</h1>

    <table class="table text-center mt-3" width="100%">
        <thead>
            <tr>
                <td>Nomor Order</td>
                <td>VA Number</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id_penitipan }}</td>
                    <td>{{ $transaction->midtrans_va_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/penitipan" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
