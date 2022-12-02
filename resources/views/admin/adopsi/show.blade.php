@extends('sb-admin/app')
@section('title', 'Adopsi')

@section('content')
    <a href="/adopsi/{{$adopsi->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
    <a href="/adopsi" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card mt-3">
        
        <div class="card-body">
            <h2 class="card-title">{{$adopsi->title}}</h2>
            <h2 class="card-title">{{$adopsi->alasan_owner}}</h2>
            <h2 class="card-title">{{$adopsi->medical_note}}</h2>
            <p class="card-text">{!!$adopsi->deskripsi!!}</p>
        </div>
    </div>
@endsection