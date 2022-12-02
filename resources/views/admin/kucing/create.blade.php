@extends('sb-admin/app')
@section('title', 'Kucing')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kucing</h1>

    <form action="/kucing" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="nama_kucing">Nama Kucing</label>
            <input type="text" class="form-control" id="nama_kucing" name="nama_kucing">
            @error('nama_kucing')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="jenis_kucing">Jenis Kucing</label>
            <input type="text" class="form-control" id="jenis_kucing" name="jenis_kucing">
            @error('jenis_kucing')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/kucing" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection