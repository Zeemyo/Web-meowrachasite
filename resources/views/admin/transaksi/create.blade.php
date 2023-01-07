@extends('sb-admin/app')
@section('title', 'transaksi')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">transaksi</h1>

    <form action="/transaksi" method="POST">
        @csrf
        <div class="form-group">
            <label for="biaya_titip">Biaya Titip</label>
            <input type="date" class="form-control" id="biaya_titip" name="biaya_titip">
            @error('biaya_titip')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="biaya_tambahan">Biaya Tambahan</label>
            <input type="date" class="form-control" id="biaya_tambahan" name="biaya_tambahan">
            @error('biaya_tambahan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="biaya_tambahan">Biaya Tambahan</label>
            <input type="text" class="form-control" id="biaya_tambahan" name="biaya_tambahan">
            @error('biaya_tambahan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="total" name="total">
            @error('total')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="status">antar jemput</label>
            <div class="form-check">
  
            @error('status')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/transaksi" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection