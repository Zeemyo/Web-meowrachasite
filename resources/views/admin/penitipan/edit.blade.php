@extends('sb-admin/app')
@section('title', 'penitipan')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">penitipan</h1>

    <form action="/penitipan/{{$penitipan->id_user}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="id_user">Nama Penitip</label>
            <select class="form-control" id="id_user" name="id_user" value="{{$penitipan->id_user}}">
                <option selected disabled>Pilih Penitip</option>
                @foreach ($users as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
            </select>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="id_kucing">Nama Kucing</label>
            <select class="form-control" id="id_kucing" name="id_kucing" value="{{$penitipan->id_kucing}}">
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
            <label for="tanggal_titip">penitipan</label>
            <input type="date" class="form-control" id="tanggal_titip" name="tanggal_titip" value="{{$penitipan->tanggal_titip}}">
           
        </div>
        <div class="form-group">
            <label for="tanggal_checkout">penitipan</label>
            <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout" value="{{$penitipan->tanggal_checkout}}">
           
        </div>
        <div class="form-group">
            <label for="lama_titip">penitipan</label>
            <input type="text" class="form-control" id="lama_titip" name="lama_titip" value="{{$penitipan->lama_titip}}">
           
        </div>
        <div class="form-group">
            <label for="layanan">penitipan</label>
            <input type="text" class="form-control" id="layanan" name="layanan" value="{{$penitipan->layanan}}">
           
        </div>
        <div class="form-group">
            <label for="antar_jemput">penitipan</label>
            <input type="text" class="form-control" id="antar_jemput" name="antar_jemput" value="{{$penitipan->antar_jemput}}">
           
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
        <a href="/penitipan" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection