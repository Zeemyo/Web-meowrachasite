@extends('sb-admin/app')

@section('title', 'Transaksi')

@section('content')



<div class="card text-center">
  <div class="card-header">
    Pembayaran
  </div>
  <div class="card-body">
    <h5 class="card-title">BSI 6635981310 HASNA ZAHIDAH</h5>
    <p class="card-text">silakan lakukan pembayaran ke nomor rekening tersebut dan upload bukti pembayaran.</p>
    <div class="mb-3">
  
    <label for="image" class="card-body"><b>Upload bukti pembayaran disini</label>
    <br>
    <input type="file" class="" id="image" name="image"  >
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <br>
            <br>
            <button type="submit" class="btn btn-primary btn-sm">Upload bukti pembayaran</button>
       
  </div>
  
</div>


@endsection