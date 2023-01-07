@extends('sb-admin/app')
@section('title', 'Konsultasi')

@section('content')
 
    <div class="card mt-3">
        <img src="/upload/konsultasi/{{$konsultasi->image}}" height="450px" class="card-img-top" alt="...">
        <div class="card-body">
        
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kucing</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$konsultasi->nama_konsultan}}">
    </div>
            <h2 class="card-title">{{$konsultasi->nama_konsultan}}</h2>
            <h2 class="card-title">{{$konsultasi->deskripsi}}</h2>
            <h2 class="card-title">{{$konsultasi->image}}</h2>
            <h2 class="card-title">{{$konsultasi->kontak}}</h2>            
        </div>
    </div>
@endsection