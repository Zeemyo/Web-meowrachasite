@extends('sb-admin/app')
@section('title', 'Kucing')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kucing</h1>

    <form action="/kucing" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="id_user">Nama user</label>
            <select class="form-control" id="id_user" name="id_user">
                <option selected disabled>Pilih User</option>
                @foreach ($users as $row)
                    @if ($row->id == Auth::id())
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama_kucing">Nama Kucing</label>
            <input type="text" class="form-control" id="nama_kucing" name="nama_kucing">
            @error('nama_kucing')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="ras">Ras Kucing</label>
            <input type="text" class="form-control" id="ras" name="ras">
            @error('ras')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <input type="text" class="form-control" id="gender" name="gender">
            @error('gender')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur Kucing</label>
            <input type="text" class="form-control" id="umur" name="umur">
            @error('umur')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="merk_makanan">Merk Makanan</label>
            <input type="text" class="form-control" id="merk_makanan" name="merk_makanan">
            @error('merk_makanan')
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
