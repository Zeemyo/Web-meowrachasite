@extends('sb-admin/app')
@section('title', 'penitipan')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Penitipan</h1>

    <form action="/penitipan" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="id_user">Nama user</label>
            <select class="form-control" id="id_user" name="id_user">
                <option selected disabled>Pilih User</option>
                @foreach ($users as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
            </select>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        @csrf
        <div class="form-group">
            <label for="id_kucing">Nama Kucing</label>
            <select class="form-control" id="id_kucing" name="id_kucing">
                <option selected disabled>Pilih Kucing</option>
                @foreach ($kucing as $row)
                    <option value="{{$row->id}}">{{$row->nama_kucing}}</option>
                @endforeach
            </select>
            @error('nama_kucing')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal_titip">Tanggal Titip</label>
            <input type="date" class="form-control" id="tanggal_titip" name="tanggal_titip">
            @error('tanggal_titip')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal_checkout">Tanggal checkout</label>
            <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout">
            @error('tanggal_checkout')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="lama_titip">lama titip</label>
            <input type="text" class="form-control" id="lama_titip" name="lama_titip">
            @error('lama_titip')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="layanan">Jenis Pelayanan</label>
            <p>- Grooming</p>
            <p>- Pelayanan Medis</p>
            <p>- Akupuntur Kucing</p>
            <input type="text" class="form-control" id="layanan" name="layanan">
            @error('layanan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="antar_jemput">antar jemput</label>
            <input type="text" class="form-control" id="antar_jemput" name="antar_jemput">                       
            @error('antar_jemput')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/penitipan" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection