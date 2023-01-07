@extends('sb-admin/app')
@section('title', 'Kucing')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kucing</h1>

    <form action="/kucing/{{$kucing->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
        <div class="form-group">
            <label for="nama">Nama Kucing</label>
            <input type="text" class="form-control" id="nama_kucing" name="nama_kucing" value="{{$kucing->nama_kucing}}">
        </div>
        <div class="form-group">
            <label for="nama">Ras Kucing</label>
            <input type="text" class="form-control" id="ras" name="ras" value="{{$kucing->ras}}">
        </div>
        <div class="form-group">
            <label for="nama">Jenis Kelamin</label>
            <input type="text" class="form-control" id="gender" name="gender" value="{{$kucing->gender}}">
        </div>
        <div class="form-group">
            <label for="nama">Umur Kucing</label>
            <input type="text" class="form-control" id="umur" name="umur" value="{{$kucing->umur}}">
        </div>
        <div class="form-group">
            <label for="nama">Merk Makanan</label>
            <input type="text" class="form-control" id="merk_makanan" name="merk_makanan" value="{{$kucing->merk_makanan}}">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <a href="/kucing" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection