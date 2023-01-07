@extends('sb-admin/app')
@section('title', 'konsultasi')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Konsultasi</h1>

    <form action="/konsultasi/{{$konsultasi->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nama_konsultan">Nama Konsultan</label>
            <input type="text" class="form-control" id="nama_konsultan" name="nama_konsultan" value="{{$konsultasi->nama_konsultan}}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Konsultan</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$konsultasi->deskripsi}}">
        </div>

        <div class="form-group">
            <label for="image">Foto Konsultan</label>
            <input type="file" class="form-control" id="image" name="image" value="{{$konsultasi->image}}">
        </div>

        <div class="form-group">
            <label for="kontak">Kontak Konsultan</label>
            <input type="text" class="form-control" id="kontak" name="kontak" value="{{$konsultasi->kontak}}">
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
        <a href="/konsultasi" class="btn btn-secondary btn-sm">Kembali</a>
</form>
@endsection

