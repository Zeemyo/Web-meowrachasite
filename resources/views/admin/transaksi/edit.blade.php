@extends('sb-admin/app')
@section('title', 'transaksi')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">transaksi</h1>

    <form action="/transaksi/{{$transaksi->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="biaya_titip">Biaya Titip</label>
            <input type="text" class="form-control" id="biaya_titip" name="biaya_titip" value="{{$transaksi->biaya_titip}}">
           
        </div>
        <div class="form-group">
            <label for="biaya_tambahan">Biaya Tambahan</label>
            <input type="text" class="form-control" id="biaya_tambahan" name="biaya_tambahan" value="{{$transaksi->biaya_tambahan}}">
           
        </div>
       
        <div class="form-group">
            <label for="biaya_total">Biaya Antar Jemput</label>
            <input type="text" class="form-control" id="biaya_total" name="biaya_total" value="{{$transaksi->biaya_total}}">
           
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="total" name="total" value="{{$transaksi->total}}">
           
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{$transaksi->status}}">
           
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <a href="/transaksi" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection