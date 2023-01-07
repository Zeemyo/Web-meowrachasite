@extends('sb-admin/app')
@section('title', 'konsultasi')


@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Konsultasi</h1>

    <form action="/konsultasi" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_konsultan">Nama Konsultan</label>
            <input type="text" class="form-control" id="nama_konsultan" name="nama_konsultan" value="{{old('nama_konsultan')}}">
            @error('nama_konsultan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        @csrf
        <div class="form-group">
            <label for="deskripsi">Deskripsi Konsultan</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{old('deskripsi')}}">
            @error('deskripsi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        @csrf
        <div class="form-group">
            <label for="image">Foto Konsultan</label>
            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        @csrf
        <div class="form-group">
            <label for="kontak">Kontak Konsultan</label>
            <input type="text" class="form-control" id="kontak" name="kontak" value="{{old('kontak')}}">
            @error('kontak')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/konsultasi" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection

