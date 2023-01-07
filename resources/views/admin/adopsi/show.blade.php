@extends('sb-admin/app')
@section('title', 'Adopsi')

@section('content')
    <a href="/adopsi/{{$adopsi->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
    <a href="/adopsi" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card mt-3">
        
        <div class="card-body">
        <img src="/upload/adopsi/{{$adopsi->image}}" height="auto" width="auto" class="card-img-top" alt="...">
            <h2 class="card-body">Nama Kucing   : {{$adopsi->nama_kucing}}</h2>
            <h2 class="card-body">Jenis Kucing  : {{$adopsi->jenis_kucing}}</h2>
            <h2 class="card-body">Alasan Owner  : {{$adopsi->alasan_owner}}</h2>
            <h2 class="card-body">Medical Note  : {{$adopsi->medical_note}}</h2>
            <h2 class="card-body">Keterangan    : {!!$adopsi->deskripsi!!}</h2>
        </div>
    </div>
@endsection